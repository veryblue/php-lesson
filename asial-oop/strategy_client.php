<?php

// エラー出力する場合
ini_set('display_errors', 1);

require_once 'Mail.php';
require_once 'MailSender.php';

$mail = new Mail();
$mail->setSender(new DebugMailSender());
$mail->send('Hello, world!');
