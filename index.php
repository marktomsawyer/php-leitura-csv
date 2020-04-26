<?php

$handle = fopen("arquivo_geral.csv", "r");

$row = 0;

while ($line = fgetcsv($handle, 0, ";")) {
	if ($row++ == 0) {
		continue;
	}

	$people[] = $line;
}
fclose($handle);

print_r($people);

echo count($people) . " linhas";

var_dump(json_encode($people));
