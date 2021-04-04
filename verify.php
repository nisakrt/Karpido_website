<?php 
ob_start();
    if($_POST["username"] == "admin" && $_POST["password"]=="admin")
    { 
        echo "Merhaba";
        session_start(); 
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['logged']   = true;
        header("Location: admin.php");
        exit; 
    }

    else
    { 
        header("Location: login.php"); 
        exit; 
    } 
ob_end_flush();
?>