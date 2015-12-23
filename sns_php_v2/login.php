<?php

require_once 'config.php';
require_once 'functions.php';

session_start();

if (!empty($_SESSION['me'])) {
    header('Location: '.SITE_URL);
    exit;
}

function getUser($email, $password, $dbh)
{
    $sql = 'select * from users where email = :email and password = :password limit 1';
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':email' => $email, ':password' => getSha1Password($password)]);
    $user = $stmt->fetch();

    return $user ? $user : false;
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // CSRF対策
    setToken();
} else {
    checkToken();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $dbh = connectDb();

    $err = [];

    // メールアドレスが登録されていない
    if (!emailExists($email, $dbh)) {
        $err['email'] = 'このメールアドレスは登録されていません';
    }

    // メールアドレスの形式不正
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err['email'] = 'メールアドレスの形式が正しくありません';
    }

    // メールアドレスが空
    if ($email == '') {
        $err['email'] = 'メールを入力してください';
    }

    // メールアドレスとパスワードが正しくない
    $me = getUser($email, $password, $dbh);
    if (!$me) {
        $err['password'] = 'パスワードとメールアドレスが正しくありません';
    }

    // パスワードが空？
    if ($password == '') {
        $err['password'] = 'パスワードを入力してください';
    }

    // エラーチェック
    if (empty($err)) {
        // セッションハイジャック対策
        session_regenerate_id(true);
        $_SESSION['me'] = $me;
        header('Location: '.SITE_URL);
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ログイン画面</title>
</head>
<body>
	<h1>ログイン</h1>
	<form action="" method="POST">
		<p>メールアドレス：<input type="text" name="email" value="<?php echo h($email) ?>"><?php echo h($err['email']) ?></p>
		<p>パスワード：<input type="password" name="password" value=""><?php echo h($err['password']) ?></p>
		<input type="hidden" name="token" value="<?php echo h($_SESSION['token']) ?>">
		<p><input type="submit" value="ログイン"> <a href="signup.php">新規登録はこちら！</a></p>
	</form>
</body>




