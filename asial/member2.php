<?php

// 多次元配列テスト

	$member[1]['name']   = "アシアル太郎";
	$member[1]['age']    = 26;
	$member[1]['gender'] = "男";

	$member[2]['name']   = "アシアル花子";
	$member[2]['age']    = 28;
	$member[2]['gender'] = "女";

	var_dump($member);

	print "<br><br><pre>";
	var_dump($member);
	print "</pre>";

?>