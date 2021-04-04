<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title> İletişim Sonuç </title>

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



<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
<script type="text/javascript" language="javascript" src="js/tablo.js"></script>


</head>

<body>
<?php include 'index_header.php';?>

<?php
include 'connect.php';

$inserted = $conn->prepare('INSERT INTO mesajlar (username,usersurname,mail,Mesaj) 
      VALUES (?,?,?,?)');

    $inserted->execute(array($_POST['Isim'],$_POST['Soyisim'],$_POST['e-mail'],$_POST['comment']));
    
    echo "nokta eklendi";

    unset($conn);

    header("Location: iletisim.php");


?>
<hr>
</div>

<footer id="altfooter">
<p>Copyright 2020 Nisanur Karatepe | KARATEPE HOLDİNG | Tüm haklar saklıdır.</p>
</footer>

</body>
</html>