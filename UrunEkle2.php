<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php include 'index_header.php';?>

<?php
function turkce($metin)
{
   $aranan=array("ç","Ç","ğ","Ğ","ı","İ","ö","Ö","ş","Ş","ü","Ü"," ");
   $yerine=array("c","c","g","g","i","i","o","o","s","s","u","u","_");
   return str_replace($aranan,$yerine,$metin);
}
if(isset($_FILES['dosya']))
{
  $hata = $_FILES['dosya']['error'];
  if($hata != 0) 
  {
    echo $hata;
    echo 'Yüklenirken bir hata gerçekleşmiş.';
  } 
  else 
  {
    $boyut = $_FILES['dosya']['size'];
    echo $boyut;
    if($boyut > (1024*1024*25))
    {
      echo 'Dosya 25 MB den büyük olamaz.';
    } 
    else 
    {
      $tip = $_FILES['dosya']['type'];
      $isim = $_FILES['dosya']['name'];
      $uzanti = explode('.', $isim);
      $uzanti = $uzanti[count($uzanti)-1];
      $konum="disaridan_gelenler/".turkce($isim);
      $dosya = $_FILES['dosya']['tmp_name'];
      if($uzanti!='jpg' && $uzanti!='jpeg'  && $uzanti!='png') 
      {
      echo 'Yanlızca jpg, jpeg ve png dosyaları gönderebilirsiniz.';
      }
      else 
      {
        echo $konum;
        if (file_exists($konum)) // yüklenen dosya upload dizininde varsa
        {
          echo "<font color='red'>Yazdığınız ad ile bir dosya zaten kayıtlıdır.</font>";
        }
        else
        {
          if(copy($dosya, $konum))
          {
            echo 'Dosyanız upload edildi!';
            include 'connect.php';
            $inserted = $conn->prepare('INSERT INTO urunler (UrunKodu,UrunAdi,Cinsiyet,Renk,Baslangic,Bitis,Kumas,Fiyat,Konum) 
                    VALUES (?,?,?,?,?,?,?,?,?)');
            $inserted->execute(array($_POST['UrunKodu'],$_POST['UrunAdi'],$_POST['cinsiyet'],$_POST['renk'],$_POST['Baslangic'],$_POST['Bitis'],$_POST['kumas'],$_POST['Fiyat'],$konum));
            header("Location: UrunEkle.php");

          }
          else
          {
            echo 'Dosyanız upload edilemedi!';
          }
        }
      }
    }
  }
}
?>
</body>
</html>
