<?php

	//youtube link 1 : https://www.youtube.com/watch?v=hEU8Ccck1Qc
	//youtube link 2 : https://www.youtube.com/watch?v=XNVA1-kfNnI
	//https://www.php.net/manual/en/mongodb.installation.pecl.php
	//https://pecl.php.net/package/mongodb/1.13.0/windows
	//https://getcomposer.org/download/

	require_once __DIR__ .'/vendor/autoload.php';
	
	// //require __DIR__.'../../vendor.autoload.php';
	// $con = new MongoDB\Client("mongodb://localhost:27017");
	// print_r($con);

	// //create a database automatically called database2022
	// $db = $con -> database2022;


	// //create a table automatically called table2022
	// $tbl = $db -> table2022;

	// //after creating, it will not reflect in compass untill one inserts

	// //inserting 
	// $tbl -> insertOne(["Name" => "Ken", "Year" => 2021]);

		//require __DIR__.'../../vendor.autoload.php';
	$con = new MongoDB\Client(
		'mongodb+srv://wainaina:1234@cluster0.5sgivs4.mongodb.net/PhpDb?serverSelectionTryOnce=false&serverSelectionTimeoutMS=150000&w=majority'
	);
	print_r($con);

	//create a database  called PhpDb
	$db = $con->PhpDb;


	//create a table automatically called PhpCollection
	$tbl = $db->PhpCollection;

	//after creating, it will not reflect in compass untill one inserts

	//inserting 
	$tbl -> insertOne(["Name"=>"Martin", "Year"=>2022])
?>