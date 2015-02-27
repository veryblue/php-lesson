<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>変数を使ったプログラムの作成</title>
</head>
<body>
<?php

	// 占いの結果を定義
	$uranai[] = "大吉";
	$uranai[] = "中吉";
	$uranai[] = "吉";
	$uranai[] = "凶";

	// ランダムな値を取得
	//$key = mt_rand(0,3);
	$key = mt_rand(0, count($uranai) - 1);

	// 結果を表示
	print '今日の運勢は' . $uranai[$key] . "です。";

?>
</body>
</html>
