<?php
//recevoir les information d'authentifiation
    $userName=$_POST['userName'];
    $passwordI=$_POST['password'];
// connection base de donneés
require 'dbConnect.php';
// recevoir les données de la base de données
$sql = "SELECT * FROM etudiant Where userName = '".$userName."'" ;

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$passwordDB = $row['password'];
//conmareer les données

if($passwordI==$passwordDB){
    session_start();
    $_SESSION['user'] = $row;
    print_r($row);
    header('location: home.php');

}else

header('location: loginPage.php');