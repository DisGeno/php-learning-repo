<?php
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 5; $j++) {
			$arr[$i][$j] = $j + 1; // заполняем подмассив числами
		}
	}
	
	var_dump($arr);