<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
  <title>Kayıt Ol</title>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.gomap-1.3.3.min.js"></script>


  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["username"].value;
  var y = document.forms["myForm"]["usersurname"].value;
  var z = document.forms["myForm"]["e_mail"].value;
  var t = document.forms["myForm"]["telephone"].value;
  var u = document.forms["myForm"]["job"].value;
  var a = document.forms["myForm"]["address"].value;
  var b = document.forms["myForm"]["password"].value;
  if (x == "" || y == "" || z == ""|| u == ""|| t == "" || a == ""|| b == "") {
    alert("Form'da zorunlu olan yerler doldurulmalıdır");
    return false;
  }

  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z))
  {
    return (true)
  }
    alert("E-e-mailni doğru doldurmanız gerekiyor")
    return (false)


}
</script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<?php include 'index_header.php';?><!-- FORM -->

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <!-- MAPİN OLDUĞU YER -->
        <div class="content">
    <form action="KayitOl2.php" id="myForm" id="name" method="post" class="basic-grey" onsubmit="return validateForm()" >
    <h1>Bilgileri giriniz</h1>
        <span>*Zorunlu alanlar</span>
    </h1>
    <label>
        <span>İsim(*):</span>
        <input id="username" type="text" name="username" placeholder="username" />
    </label>

    <label>
        <span>Soyisim(*):</span>
        <input id="usersurname" type="text" name="usersurname" placeholder="usersurname" />
    </label>
    
    <label>
        <span>E-Mail(*):</span>
        <input id="e_mail" type="text" name="e_mail" placeholder="e_mail" />
    </label>
    <label>
        <span>telephone Numarası(*):</span>
        <input id="telephone" type="text" name="telephone" placeholder="telephone" />
    </label>
  
     <label>
        <span>job(*):</span>
        <input id="job" type="text" name="job" placeholder="job" />
    </label> 

    <label>
        <span>address(*):</span>
        <textarea class="form-control" rows="5" name="address" id="address"></textarea>
    </label> 
     <label>
        <span>password(*):</span>
        <input id="password" type="text" name="password" placeholder="password" />
    </label>
        <label>
        <span>&nbsp;</span> 
        <input type="submit" class="btn btn-primary" value="KAYDOL" href="KayıtOl2.php" /> 
        <input type="button" class="btn btn-warning" value="Temizle" onclick="document.getElementById('myForm').reset()" /> 
    </label>    
</form>
          </div>
        
      <!--form BİTİŞİ -->
      </div>
    <div class="col-sm-2"></div>
</div>


</div>

<footer id="altfooter">
    Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.
</footer>

</body>
</html>