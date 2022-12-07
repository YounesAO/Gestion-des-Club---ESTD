<?php
//recevoir les information d'authentifiation
    $userName=$_POST['userName'];
    $password=$_POST['Password'];
// connection base de donneés
require 'dbConnect.php';
// recevoir les données de la base de données
$sql = 'SELECT * FROM user Where userName = '+$userName ;
$result = mysqli_query($con,$sql);
$passwordDB = mysqli_fetch_row($result)['password'];
//conmareer les données
if(!($password==$passwordDB)){
    header('location: index.php/?get=erreur_connection"');
}
session_start();
$_SESSION['user'] = $result;
header('location: home.php');
