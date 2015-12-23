<?php

// continue文による両替プログラム

//$money = 1314;
$money = $_GET['money'];

$kinds = [1, 5, 10, 50, 100, 1000, 10000];
rsort($kinds);

foreach ($kinds as $val) {
    $quantity = floor($money / $val);

    if ($quantity == 0) {
        continue;
    }

    $money = $money - $val * $quantity;

    echo $val.'が'.$quantity.'枚<br>';
}

// print $val;
// print $money;
