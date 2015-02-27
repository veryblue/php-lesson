<?php

require_once('config.php');
require_once('functions.php');

session_start();

function setToken() {
	$token = sha1(uniqid(mt_rand(), true));
	$_SESSION['token'] = $token;
}

function checkToken() {
	if (empty($_SESSION['token']) || ($_SESSION['token'] != $_POST['token'])) {
		echo "不正な処理が行われました。";
		exit;
	}
}

function emailExists($email, $dbh) {
	$sql = "select * from users where email = :email limit 1";
	$stmt = $dbh->prepare($sql);
	$stmt->execute(array(":email" => $email));
	$user = $stmt->fetch();
	return $user ? true : false;
}

function getSha1Password($s) {
	return (sha1(PASSWORD_KEY.$s));
}


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	// CSRF対策
	setToken();
}  else {
	checkToken();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$dbh = connectDb();

	$err = array();

	// チェック：名前
	if ($name == '') {
		$err['name'] = 'お名前を入力してください';
	}

	// チェック：メール
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$err['email'] = 'メールアドレスの形式が正しくありません';
	}

	if (emailExists($email, $dbh)) {
		$err['email'] = 'すでに登録されています';
	}

	if ($email == '') {
		$err['email'] = 'メールを入力してください';
	}

	// チェック：パスワード
	if ($password == '') {
		$err['password'] = 'パスワードを入力してください';
	}

	// エラーチェック
	if (empty($err)) {
		// 登録処理
		$sql = "insert into users
				(name, email, password, created, modified)
				values
				(:name, :email, :password, now(), now())";
		$stmt = $dbh->prepare($sql);
		$params = array(
			":name" => $name,
			":email" => $email,
			":password" => getSha1Password($password)
			);
		$stmt->execute($params);
		header('Location: '.SITE_URL.'login.php');
		exit;
	}


}



?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>新規ユーザー登録</title>
</head>
<body>
	<h1>新規ユーザー登録</h1>
	<form action="" method="POST">
		<p>お名前：<input type="text" name="name" value="<?php echo h($name) ?>"><?php echo h($err['name']) ?></p>
		<p>メールアドレス：<input type="text" name="email" value="<?php echo h($email) ?>"><?php echo h($err['email']) ?></p>
		<p>パスワード：<input type="password" name="password" value=""><?php echo h($err['password']) ?></p>
		<input type="hidden" name="token" value="<?php echo h($_SESSION['token']) ?>">
		<p><input type="submit" value="ログイン"> <a href="signup.php">戻る</a></p>
	</form>
</body>




