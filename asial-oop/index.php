<?php

require_once('Person.php');

$taro = new Person('アシアル太郎', 20);
$hanako = new Person('アシアル花子', 18);

//$taro->setAge(20);

$taro->sayHello();
$hanako->sayHello();

//echo 'test';
