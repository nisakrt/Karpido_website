<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
} 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Kullanıcı Sayfası</title>
	<link rel="stylesheet" href="css/main.css">
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php include 'header.php';?>


<h3> Hoşgeldiniz, <?php echo $_SESSION['username']?></h3>
<hr>
<div id="admin">



<a href="UrunEkle.php" class="btn btn-warning" role="button">Ürün Ekle</a>
<a href="FetchUrunler.php" class="btn btn-warning" role="button">Ürünleri Görüntüle</a>
<a href="FetchComminication.php" class="btn btn-warning" role="button">Mesajları Görüntüle</a>
<a href="logout.php" class="btn btn-warning" role="button">Çıkış</a>
</div>

<footer id="altfooter">
<p>Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.</p>
</footer>

</body>
</html>
