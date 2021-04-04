<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
} 
//echo 'Welcome, '.$_SESSION['username']; 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title> Müşteri Mesajları </title>

<!-- BOOTSTRAP and DATATABLES -->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.3/css/dataTables.tableTools.css">
<!-- MY CSS -->
<link rel="stylesheet" href="css/main.css">
<!-- JS FILES -->
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>



<!-- GOOGLE FONT : OPEN SANS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
<script type="text/javascript" language="javascript" src="js/tablo.js"></script>


</head>

<body>
<?php include 'index_header.php';?>

<?php
	include 'connect.php';


	$stmt = $conn->prepare('SELECT * FROM mesajlar');
	$stmt->execute();
	echo '<div class="container">';
	echo '<h1 class="baslik">Müşteri Mesajları</h1>';

	echo '<table id="tablo" cellspacing="0" class="display table table-striped table-bordered">';
	echo "<thead>";
	echo "<tr>";
			echo "<th>";
			echo "ID";
			echo "</th>";
			echo "<th>";
			echo "Isim";
			echo "</th>";
			echo "<th>";
			echo "Soyisim";
			echo "</th>";
			echo "<th>";
			echo "Mail";
			echo "</th>";
			echo "<th>";
			echo "Tarih";
			echo "</th>";
			echo "<th>";
			echo "Mesaj";
			echo "</th>";
			echo "<th>";
			echo "Sil";
			echo "</th>"; 
	echo "</tr>";	
	echo "</thead>";
	echo "<tbody>";

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo "<tr>";
			echo "<td>";
			echo $row['ID'];
			echo "</td>";
			echo "<td>";
			echo $row['username'];
			echo "</td>";
			echo "<td>";
			echo $row['usersurname'];
			echo "</td>";
			echo "<td>";
			echo $row['mail'];
			echo "</td>";
			echo "<td>";
			echo $row['date'];
			echo "</td>";
			echo "<td>";
			echo $row['Mesaj'];
			echo "</td>";
			echo "<td>";
			echo '<a href="delete.php?Comminicaiton_ID=' .$row['ID'] . '">Sil</a>';
			echo "</td>";
			echo "<td>";
	}

	echo "</tr>";
	echo "</tbody>";

	echo "</table>";
	




?>
<hr>
<div id="butonlar">
<a href="admin.php" class="btn btn-warning" role="button">Admin Sayfam</a>
<a href="logout.php" class="btn btn-warning" role="button">Çıkış</a>
</div>
</div>


</body>
