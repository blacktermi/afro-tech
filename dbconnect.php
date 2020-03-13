<?php
//reception des donnée du formulaire
try{
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $db=new PDO('mysql:host=; dbname=','','');
    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); //Mettre les noms des champs en majuscule
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Lancer des exception en cas d'erreurs
    }
catch(PDOException $e){
    die('Erreur : '.$e->getmessage());
    }
?>