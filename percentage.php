<?php

$file = "./counter.txt";    //Checking : IF file is there then OK ELSE Create a new file.
$document = file_get_contents($file);   // Getting File Contents.
$per = explode(",", $document);    //Exploding Values By Comma & Storing Values In Array.

$total = $per[0]+$per[1]+$per[2];

for($p=0;$p<3;$p++) {


	$per[$p]=($per[$p]/$total)*100;
	
}
	
?>