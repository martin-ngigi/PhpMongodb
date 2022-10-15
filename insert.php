<?php

	//youtube link 1 : https://www.youtube.com/watch?v=hEU8Ccck1Qc
	//youtube link 2 : https://www.youtube.com/watch?v=XNVA1-kfNnI
	//https://www.php.net/manual/en/mongodb.installation.pecl.php
	//https://pecl.php.net/package/mongodb/1.13.0/windows
	//https://getcomposer.org/download/

	require_once __DIR__ .'/vendor/autoload.php';
	
	//require __DIR__.'../../vendor.autoload.php';
	$con = new MongoDB\Client("mongodb://localhost:27017");
	print_r($con);

	//create a database automatically called database2022
	$db = $con -> database2022;


	//create a table automatically called table2022
	$tbl = $db -> table2022;

	//after creating, it will not reflect in compass untill one inserts

	//inserting 
	$tbl -> insertOne(["Name" => "Wainaina", "Year" => 2022]);
?>