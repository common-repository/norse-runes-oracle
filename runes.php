<?php
$tmpRunes = new runes();

$norserunes = $tmpRunes->returnOriginalArray();

foreach ($norserunes as $key => $value) {
	$norserunes[$key] = array($value[1],$value[2],$value[3],$value[4]);	
}

