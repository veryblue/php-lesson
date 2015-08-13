<!DOCTYPE html>
<html lang="ja">
<head>
	<title>PHP 日付と時刻</title>
	<meta charset="UTF8">
</head>
<body>
<?php

/* 参考：PHPマニュアル PHP マニュアル 日付・時刻
 * http://php.net/manual/ja/book.datetime.php
 *
 */

// Lesson1: time()
// 現在の Unix タイムスタンプを返す : http://php.net/manual/ja/function.time.php
// 例: 現在の Unix タイムスタンプを表示
// echo time();

// Lesson2: date()
// ローカルの日付/時刻を書式化する : http://php.net/manual/ja/function.date.php
// 例: 今日の日時、曜日を表示
// echo date("Y-m-d H:i:s l");

// Lesson3: mktime()
// 日付を Unix のタイムスタンプとして取得する
// http://php.net/manual/ja/function.mktime.php
// 例: 日付から曜日を特定
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// Lesson4: strtotime()
// 英文形式の日付を Unix タイムスタンプに変換する
// http://php.net/manual/ja/function.strtotime.php
// 例: 1週間後のUnixタイムを取得
// echo strtotime("+1 week");
// 例: 15日後の曜日を取得
// echo date("Y-m-d H:i:s l", strtotime("+ 15 days"));

// Lesson5: 応用問題: 自分の誕生日の曜日を調べてみよう！

/* ============================================================== */

// DateTimeクラスによる書き換え

// Lesson6: getTimestamp()
// Unix タイムスタンプを取得する
// http://php.net/manual/ja/datetime.gettimestamp.php
// -- 従来 ---
// echo time();
// -- 上記を DateTimeで書き換えると... ---
// $date = new DateTime();
// echo $date->getTimestamp();

// lesson7: format()
// 指定した書式でフォーマットした日付を返す
// http://php.net/manual/ja/datetime.format.php
// -- 従来 ---
// echo date("Y-m-d H:i:s l");
// --上記を DateTimeで書き換えると... ---
// $date = new DateTime();
// echo $date->format('Y-m-d H:i:s');

// lesson8
// 時刻のパース
// -- 従来 ---
// echo date('Y-m-d H:i:s', strtotime('2015-08-13 00:00:00'));
// --上記を DateTimeで書き換えると... ---
// $date = new DateTime('2015-08-13 00:00:00');
// echo $date->format('Y-m-d H:i:s');

// lesson9
// 日付の比較
// -- 従来 ---
// $date1 = '2015-08-12';
// $date2 = '2015-08-13';
// if (strtotime($date1) < strtotime($date2)) {
// echo $date1 . 'より' . $date2 . 'のほうが大きい';
// }
// --上記を DateTimeで書き換えると... ---
// $date1 = new DateTime('2015-08-12');
// $date2 = new DateTime('2015-08-13');
// if ($date1 < $date2) {
// 	echo $date1->format('Y-m-d') . 'より' . $date2->format('Y-m-d') . 'のほうが大きい';
// }

// lesson10: diff()
// ふたつの日付の差を返す
// http://php.net/manual/ja/datetime.diff.php
// -- 従来 ---
// $date1 = '2015-08-12';
// $date2 = '2015-08-13';
// echo (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24) . ' days';
// --上記を DateTimeで書き換えると... ---
// $date1 = new DateTime('2015-08-13');
// $date2 = new DateTime('2015-08-12');
// $interval = $date1->diff($date2);
// echo $interval->format('%a days');

?>
</body>
</html>
