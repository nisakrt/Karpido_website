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
<title>Ürünler Listesi</title>

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


	$stmt = $conn->prepare('SELECT * FROM urunler');
	$stmt->execute();
	echo '<div class="container">';
	echo '<h1 class="baslik">Ürünler Listesi</h1>';

	echo '<table id="tablo" cellspacing="0" class="display table table-striped table-bordered">';
	echo "<thead>";
	echo "<tr>";
			echo "<th>";
			echo "ID";
			echo "</th>";
			echo "<th>";
			echo "Urun Adi";
			echo "</th>";
			echo "<th>";
			echo "Urun Kodu";
			echo "</th>";
			echo "<th>";
			echo "Cinsiyet";
			echo "</th>";
			echo "<th>";
			echo "Renk";
			echo "</th>";
			echo "<th>";
			echo "Fotoğraf";
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
			echo $row['UrunAdi'];
			echo "</td>";
			echo "<td>";
			echo $row['UrunKodu'];
			echo "</td>";
			echo "<td>";
			echo $row['Cinsiyet'];
			echo "</td>";
			echo "<td>";
			echo $row['Renk'];
			echo "</td>";
			echo "<td>";
			echo '<img src='.$row["Konum"].' alt="Fotoğraf" height="100" width="150">';

			echo "</td>";
			echo "<td>";
			echo '<a href="UrunSil.php?ID=' .$row['ID'] . '">Sil</a>';
			echo "</td>";
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
