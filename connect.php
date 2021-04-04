<?php
	// $con = mysql_connect("localhost","root","");

	// if(!$con){

	// 	die('Bağlantı sağlanamadı '. mysql_error());

	// }

	// mysql_select_db("harita", $con);

	$config = array(
		'DB_USERNAME' => '3485207_karteks',
		'DB_PASSWORD' => 'El-Cezeri.1907'
		);

	try{ 
		$conn = new PDO('mysql:host=fdb22.awardspace.net;dbname=3485207_karteks', $config['DB_USERNAME'], $config['DB_PASSWORD']);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo 'ERROR:' .$e->getMessage();
	}



?>