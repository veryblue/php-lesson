<?php

require_once('Person.php');
require_once('Employee.php');

$taro = new Employee('アシアル太郎', 20);
$taro->displaySalary();
