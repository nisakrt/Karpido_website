<?php 
include 'connect.php';
ob_start();
$inserted = $conn->prepare('INSERT INTO kayitlar (username,usersurname,e_mail,telephone,job,address,password) 
VALUES (?,?,?,?,?,?,?)');
$inserted->execute(array($_POST['username'],$_POST['usersurname'],$_POST['e_mail'],$_POST['telephone'],$_POST['job'],$_POST['address'],$_POST['password']));
echo "nokta eklendi";
unset($conn);
header("Location: KayitOl.php");
ob_end_flush();
?>