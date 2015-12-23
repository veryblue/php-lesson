<?php

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$message = $_GET['str'];

echo h($message);
