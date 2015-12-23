<?php

// 多次元配列のforeach

    $members[1]['name'] = 'アシアル太郎';
    $members[1]['age'] = 26;
    $members[1]['gender'] = '男';

    $members[2]['name'] = 'アシアル花子';
    $members[2]['age'] = 28;
    $members[2]['gender'] = '女';

    foreach ($members as $key => $member) {

        // print $key . "は" . $value . "です<br>";

        foreach ($member as $key2 => $value2) {
            echo $key2.'は'.$value2.'です<br>';
        }
    }
