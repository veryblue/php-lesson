<?php

// while分テスト

	$i = 1;

	while ($i <= 31) {

		print "$i";

		if ($i % 7 == 0) {
			print "<br>";
		}

		$i = $i + 1;
	}

?>