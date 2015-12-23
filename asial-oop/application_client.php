<?php

// エラー出力する場合
ini_set('display_errors', 1);

require_once 'FileLogger.php';
require_once 'Application.php';

$logger = new FileLogger('/var/www/html/repos/php-lesson/asial-oop/temp/log.txt');

$app = new Application();
$app->setLogger($logger);

$app->log('アプリケーション起動');
$app->log('処理を受け付けました');
$app->log('アプリケーション終了');
