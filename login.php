<?php
//recevoir les information d'authentifiation
    $userName=$_POST['userName'];
    $password=$_POST['password'];
// connection base de donneés
require 'dbConnect.php';
// recevoir les données de la base de données
$sql = "SELECT * FROM user Where userName = '".$userName."'" ;

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$passwordDB = $row['password'];
//conmareer les données
if(!($password==$passwordDB)){
    header('location: index.php/?get=erreur_connection"');
}
session_start();
$_SESSION['user'] = $row;
print_r($row);
header('location: home.php');
