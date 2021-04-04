<?php 
ob_start();
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
ob_end_flush();
} 
//echo 'Welcome, '.$_SESSION['username']; 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
  <title>Ürün Ekle</title>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.gomap-1.3.3.min.js"></script>


<link rel="stylesheet" href="css/main.css">
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["UrunAdi"].value;
  var y = document.forms["myForm"]["UrunKodu"].value;
  var z = document.forms["myForm"]["Fiyat"].value;
  var a = document.forms["myForm"]["dosya"].value;
  if (x == "" || y == "" || z == "" || a == "") {
    alert("Form'da zorunlu olan yerler doldurulmalıdır");
    return false;
  }

  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z))
  {
    return (true)
  }
   


}
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
  
<?php include 'index_header.php';?>

<!-- FORM -->

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <!-- MAPİN OLDUĞU YER -->
        <div class="content">
              <form action="UrunEkle2.php" method="post"  id="myForm" enctype="multipart/form-data" class="basic-grey" onsubmit="return validateForm()">
    <h1>Ürün bilgileri giriniz</h1>
        <span>*Tüm alanları doldurun.</span>
    </h1>
    <label>
        <span>Ürün Adı:</span>
        <input id="UrunAdi" type="text" name="UrunAdi" placeholder="Ürün Adı" />
    </label>

    <label>
        <span>Ürün Kodu:</span>
        <input id="UrunKodu" type="text" name="UrunKodu" placeholder="Ürün Kodu" onkeypress="return isNumberKey(event)" />
    </label>

    <label>
        <span>Cinsiyet:</span>
        <div class="form-group">
          <select class="form-control" id="cinsiyet" name="cinsiyet" >
            <option>Erkek</option>
            <option>Kız</option>
          </select>
        </div>
    </label>

    <label>
        <span>Ürün Kumaşı:</span>
        <div class="form-group">
          <select class="form-control" id="kumas" name="kumas" >
            <option>Keten</option>
            <option>Kot</option>
            <option>Gabardin</option>
            <option>D</option>
          </select>
        </div>
    </label>
    
    <label>
        <span>Ürün Rengi:</span>
        <div class="form-group">
          <select class="form-control" id="renk" name="renk" >
            <option>Siyah</option>
            <option>Mavi</option>
            <option>Turuncu</option>
            <option>Lacivert</option>
          </select>
        </div>
    </label>
      
    <label>
        <span>Yaş Aralığı Başlangıcı:</span>
        <div class="form-group">
          <select class="form-control" id="Baslangic" name="Baslangic" >
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
          </select>
        </div>
    </label>

    <label>
        <span>Yaş Aralığı Sonu:</span>
        <div class="form-group">
          <select class="form-control" id="Bitis" name="Bitis" >
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
          </select>
        </div>
    </label>


    <label>
        <span>Fiyat:</span>
        <input id="Fiyat" type="text" name="Fiyat" placeholder="Ürün Fiyatı" />
    </label>


    <label>
        <span>Dosya Seç:</span>
        <div class="form-group">
          <div>
            <input type="file" class="dosya" name="dosya">
          </div>
        </div>
    </label> 
    <span>&nbsp;</span> 
    
    <label>
        <span>&nbsp;</span> 
        <input type="submit" class="btn btn-primary" value="Gönder" /> 
        <input type="button" class="btn btn-warning" value="Temizle" onclick="document.getElementById('myForm').reset()" /> 
    </label>    

</form>
          </div>
        
      <!--form BİTİŞİ -->
      </div>
    <div class="col-sm-2"></div>
</div>


</div>

<div class="linkler">
<a href="admin.php" class="btn btn-warning" role="button">Admin Sayfam</a>
<a href="logout.php" class="btn btn-warning" role="button">Çıkış</a>
</div>
<br><br>
<footer id="altfooter">
<p>Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.</p>
</footer>

</body>
</html>