<?php

// 30日後を取得
// 曜日を取得

$xday    = 30;
$now     = time() + 60 * 60* 24;
$feature = $now * $xday;

$weekday = array("日","月","火","水","木","金","土");

print date("Y/m/d", $feature);
print '(' . $weekday[date("w", $feature)] . ')';


