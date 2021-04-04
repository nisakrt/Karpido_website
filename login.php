<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Giriş Sayfası</title>
	<link rel="stylesheet" href="css/main.css">
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"><!--Stil atma için kullanılır.-->

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"><!--Stil atma için kullanılır.-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php include 'header.php';?>

<center><h2>Giriş yapınız</h2></center>

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <!-- MAPİN OLDUĞU YER -->
        <div class="content">

<form action="verify.php" method="post" class="basic-grey">
   <label>
    <span>Kullanıcı Adı</span>
    <input type="text" name="username" placeholder="Kullanıcı Adı"><!--kullanıcı adı-->
    </label>
    <label>
    <span>Şifre</span>
    <input type="password" name="password" id="def" placeholder="Şifre"><!--Şifre-->
    </label>
    <label>
      <span>&nbsp;</span> 
      <span>&nbsp;</span> 
      <br>
    <input type="submit" name="submit" value="Login" class="btn btn-warning">
    <a href="KayitOl.php" class="btn btn-warning" role="button">Kayıt ol</a><!--buton-->
    </label>
</form>
</div>
</div>
</div>
</div>

<footer id="altfooter">
<p>Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.</p>
</footer>

</body>
</html>