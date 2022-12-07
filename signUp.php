<?php
//connection a la bade de données
require 'dbConnect.php';
//recevois des information d'inscription 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cne=$_POST['cne'];
$email=$_POST['email'];
$password=$_POST['password'];
$userName=$_POST['userName'];
//inserer les in formation 
$sql = 'INSERT INTO User values (?,?,?,?,?,?)';

?>