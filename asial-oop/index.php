<?php

require_once('Person.php');

$taro = new Person('アシアル太郎', 20);
$hanako = new Person('アシアル花子', 18);

//$taro->setAge(20);

$taro->sayHello();

unset($taro); // オブジェクトの破棄
// $tato = "hogehoge"; // こっちでも破棄される


$hanako->sayHello();

//echo 'test';
