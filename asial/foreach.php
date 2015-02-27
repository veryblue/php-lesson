<?php

// foreach文

	$member['name']   = "アシアル太郎";
	$member['age']    = 26;
	$member['gender'] = "男";

	foreach ($member as $key => $value) {
		print $key . "は" . $value . "です<br>";
	}

	// keyが必要ない場合には、省略もできる
	foreach ($member => $value) {
		print $value . "<br>";
	}
