<?php

// while分テスト

    $i = 1;

    while ($i <= 31) {
        echo "$i";

        if ($i % 7 == 0) {
            echo '<br>';
        }

        $i = $i + 1;
    }
