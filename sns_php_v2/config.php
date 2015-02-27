<?php

define('DNS', 'mysql:host=192.168.1.120;dbname=dotinstall_sns_php');
define('DB_USER', 'root');
define('DB_PASSWORD', 'secret');

define('SITE_URL', 'http://192.168.33.10/repos/php-lesson/sns_php_v2/');
define('PASSWORD_KEY', 'xd8sdf(!sdf');

// エラー表示
error_reporting(E_ALL & ~E_NOTICE);

// セッションはこのディレクトリのみで有効
session_set_cookie_params(0, '/php-lesson/sns_php_v2/');
