<?php
require 'dbConnect.php';
session_start();
$idClub = $_GET['idClub'];
$idE = $_SESSION['user']['idEtudiant'];
$sql = "INSERT INTO integrer(`idClub`, `IdEtudiant`, `valide`) VALUES ('".$idClub."', '".$idE."', '0');";
if (mysqli_query($con, $sql)) {
    
   
     header('location: home.php');
    }
    else{ echo'error';}
?>