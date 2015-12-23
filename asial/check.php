<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$gender = ['男性', '女性', '回答しない'];
$note_len = 400;

/*

# フロー
1. 入力値のチェック
2. NG：エラー	メッセージを表示
3. OK；画面表示とメール送信		

# スタイル
- テーブル

# 入力チェック
## 名前
- 名前が空文字ではない

## 性別
- 選択肢が選択されていること
- 用意された選択肢であること

## 備考
- 400字以内であること



print "名前は" . $_POST['name'];
print "<br>";
print "性別は" . $_POST['gender'];
print "<br>";
print "備考は" . nl2br($_POST['note']);

*/

?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>from / check</title>
</head>
<body>
<?php

// 名前の入力チェック
if (!isset($_POST['name']) || trim($_POST['name']) == '') {
    $errors[] = '名前がセットされていないか、入力されていません';
}

// 性別のチェック
if (!isset($_POST['gender'])) {
    $errors[] = '性別が選択されていません';
} elseif (!in_array($_POST['gender'], $gender)) {
    $errors[] = '性別の選択肢で問題が発生しました';
}

// 備考の入力チェック
if (!isset($_POST['note']) || trim($_POST['note']) == '') {
    $errors[] = '備考がセットされていません';
} elseif (mb_strlen($_POST['note']) > $note_len) {
    $errors[] = '備考の文字数は'.$note_len.'文字以内にしてください';
}

if (count($errors)) {
    ?>
エラーがあります<br>
<?php
    echo implode('<br>', $errors);
} else {
    // メールを送る
    $body = "アンケート情報が入力されました\n";
    $body .= '名前：'.$_POST['name']."\n";
    $body .= '性別：'.$_POST['gender']."\n";
    $body .= '備考：'.$_POST['note']."\n";

    // PHP側の言語設定を日本語/UTF-8で上書きする
    mb_language('Japanese');
    mb_internal_encoding('UTF-8');
    mb_send_mail('test@exsample.com', 'アンケート情報', $body);

    ?>

入力を受け付けました

<table border="1">
	<tr>
		<th>名前</th>
		<td><?php echo h($_POST['name']);
    ?></td>
	</tr>
	<tr>
		<th>性別</th>
		<td><?php echo h($_POST['gender']);
    ?></td>
	</tr>
	<tr>
		<th>名前</th>
		<td><?php echo nl2br(h($_POST['note']));
    ?></td>
	</tr>
</table>

<?php

}
?>

</body>
</html>

