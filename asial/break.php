<?php

    // continue, break サンプル

    for ($i = 1; $i <= 200; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        if ($i > 100) {
            break;
        }
        echo $i.'<br>';
    }
