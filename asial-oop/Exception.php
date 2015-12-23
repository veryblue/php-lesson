<?php

// エラー出力する場合
ini_set('display_errors', 1);

try {
    echo 'try開始';
    throw new Exception('はじめてのException');
    echo 'try終了';
} catch (Exception $e) {
    echo $e->getMessage();
}
