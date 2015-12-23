<?php

$now = new DateTime('', new DateTimeZone('Asia/Tokyo'));
echo $now->format('Y-m-d H:i:s');

echo '<br>';

date_default_timezone_set('Asia/Tokyo');
$now = date('Y-m-d H:i:s');
echo $now;
