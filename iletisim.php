<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
  <title>İletişim</title>
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
  var x = document.forms["myForm"]["Isim"].value;
  var y = document.forms["myForm"]["Soyisim"].value;
  var z = document.forms["myForm"]["e-mail"].value;
  var a = document.forms["myForm"]["comment"].value;
  if (x == "" || y == "" || z == "" || a == "") {
    alert("Form'da zorunlu olan yerler doldurulmalıdır");
    return false;
  }

  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z))
  {
    return (true)
  }
    alert("E-Mail adresini doğru doldurmanız gerekiyor")
    return (false)


}
</script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<?php include 'header.php';?>
<!-- FORM -->


<div class="container-fluid">
  <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="sol"> </div>
        <p >
        MERKEZ:Celal Ferdi Gökçay Sokak Anadolu Pasajı No:216 Mahmutpaşa/Fatih İSTANBUL
        <iframe class=" sag" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1265.8180810934703!2d28.972100005882297!3d41.01125785671286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed86fcecc34c21f6!2sKarpido!5e0!3m2!1str!2str!4v1617541150523!5m2!1str!2str" width="300" height="300" style="border:50;" allowfullscreen="" loading="lazy"; >
        </iframe>
        
    </p>
    <p>
            ŞUBE: Koska Caddesi Nişanca Bostan Sokak No:44 Laleli/Fatih İSTANBUL

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1265.8180810934703!2d28.972100005882297!3d41.01125785671286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed86fcecc34c21f6!2sKarpido!5e0!3m2!1str!2str!4v1617541150523!5m2!1str!2str" width="300" height="300" style="border:50;" allowfullscreen="" loading="lazy" >
        </iframe>
        
    </p>
   
      <!-- MAPİN OLDUĞU YER -->
        <div class="content">
    <form action="iletisim2.php" id="myForm" id="name" method="post" class="basic-grey" onsubmit="return validateForm()" >
    <h1>İletişim bilgilerini giriniz</h1>
        <span>*Zorunlu alanlar</span>
    </h1>
    <label>
        <span>İsim(*):</span>
        <input id="Isim" type="text" name="Isim" placeholder="İsim" />
    </label>

    <label>
        <span>Soyisim(*):</span>
        <input id="Soyisim" type="text" name="Soyisim" placeholder="Soyisim" />
    </label>

    <label>
        <span>Mesaj Konusu:</span>
        <input id="konu" type="text" name="konu" placeholder="Mesaj Konusu"/>
    </label>
    
    <label>
        <span>E-Mail(*):</span>
        <input id="e-mail" type="text" name="e-mail" placeholder="E-Mail" />
    </label>
  
     <label>
        <span>Meslek:</span>
        <div class="form-group">
          <select class="form-control" id="dropmenu" name="dropmenu" >
            <option>Ticaret</option>
            <option>Serbest Meslek</option>
            <option>Esnaf</option>
            <option>Diğer</option>
          </select>
        </div>
    </label> 

    <label>
        <span>Mesaj(*):</span>
        <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
    </label> 
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

<footer id="altfooter">
    Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.
</footer>

</body>
</html>