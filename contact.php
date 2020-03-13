<?php
ob_start();
session_start();
require('dbconnect.php');
/*reception des donnee du formulaire*/
$nom=$_POST['nom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$objet=$_POST['objet'];
$message=$_POST['message'];
//echo $nom."<br>".$email."<br>".$telephone."<br>".$objet."<br>".$message;
$insert=$db->prepare("INSERT INTO contact(nom,email,telephone,objet,message) VALUES(?,?,?,?,?)");
$insert->execute(array($nom,$email,$telephone,$objet,$message));
header('Location:index.html');
ob_end_flush();
?>