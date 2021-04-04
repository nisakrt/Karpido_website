<?php
ob_start();

	include 'connect.php';


	$Incoming_ID = $_GET['ID'];
	$stmt = $conn->prepare("DELETE FROM urunler WHERE ID = '$Incoming_ID' ");
	$stmt->execute();
	

	echo "<p>Kayıt Silindi</p>";

  header("Location: FetchUrunler.php");

ob_end_flush();
?>