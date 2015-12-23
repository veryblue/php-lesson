<?php

// 条件判定

    //$age = 18;
    $age = $_GET['age'];

    if ($age < 20) {
        echo '未成年にはお酒を提供できません';
    } else {
        echo 'お酒はほどほどに';
    }
