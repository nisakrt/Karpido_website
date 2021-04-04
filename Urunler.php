<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link rel="stylesheet" href="css/main.css">

  <title>Anasayfa</title>
</head>
<body>
<?php include 'header.php';?>


<?php
  include 'connect.php';


  $stmt = $conn->prepare('SELECT * FROM urunler');
  $stmt->execute();


  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {   
      echo '<div class="row">';
      
      echo '<div class="col-md-6">';

      echo '<div class="col-md-1">';
      echo '</div>';


      echo '<div class="col-md-5 urunler-panel">';
      echo '<img src='.$row["Konum"].' alt="Fotoğraf" height="200" width="300" class="foto" >';
      echo '</div>';

      echo '<div class="col-md-6 urunler-icerik">';
      echo '<h2>'.$row['UrunAdi'].'</h2>';
      echo '<p>Ürün Kodu: '.$row['UrunKodu'].'</p>';
      echo '<p>Eklenme Tarihi: '.$row['Tarih'].'</p>';
      echo '<p>Cinsiyet: '.$row['Cinsiyet'].'</p>';
      echo '<p>Renk: '.$row['Renk'].'</p>';
      echo '<p>Yaş Aralığı: '.$row['Baslangic'].'-'.$row['Bitis'].'</p>';
      

      echo '<input type="submit" class="btn btn-primary right" align="right" value="Sepete Ekle" /> ';
      echo '</div>';


    echo '</div>';


      if($row = $stmt->fetch(PDO::FETCH_ASSOC))
      {
        echo '<div class="col-md-6">';

          echo '<div class="col-md-5 urunler-panel">';
          echo '<img src='.$row["Konum"].' alt="Fotoğraf" height="200" class="foto" width="300">';
          echo '</div>';

          echo '<div class="col-md-6 urunler-icerik">';
          echo '<h2>'.$row['UrunAdi'].'</h2>';
          echo '<p>Ürün Kodu: '.$row['UrunKodu'].'</p>';
          echo '<p>Eklenme Tarihi: '.$row['Tarih'].'</p>';
          echo '<p>Cinsiyet: '.$row['Cinsiyet'].'</p>';
          echo '<p>Renk: '.$row['Renk'].'</p>';
          echo '<p>Yaş Aralığı: '.$row['Baslangic'].'-'.$row['Bitis'].'</p>';
          echo '<input type="submit" class="btn btn-primary right" align="right" value="Sepete Ekle" /> ';
          echo '</div>';


        echo '</div>';
      }

     echo '</div>';
     echo '<br>';
     echo '<br>';
     
  }
  
  ?>


<footer id="altfooter">
 <p>Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.</p>
</footer>

</body>

</html>
