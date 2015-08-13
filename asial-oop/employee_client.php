<?php

// エラー出力しない場合
//ini_set( 'display_errors', 0 );

// エラー出力する場合
ini_set( 'display_errors', 1 );


require_once('Person.php');
require_once('Employee.php');

$taro = new Employee('アシアル太郎', 20);
$taro->displaySalary();
