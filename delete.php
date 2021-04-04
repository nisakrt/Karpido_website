<?php
		
	include 'connect.php';


	$Incoming_ID = $_GET['Comminicaiton_ID'];
	$stmt = $conn->prepare("DELETE FROM mesajlar WHERE ID = '$Incoming_ID' ");
	$stmt->execute();
	

	echo "<p>Kayıt Silindi</p>";

  header("Location: FetchComminication.php");


?>