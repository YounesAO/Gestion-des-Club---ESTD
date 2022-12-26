<?php
require "dbConnect.php";
session_start();
   $idClub=$_GET['idClub'];
    $nomEvent = $_POST["nomEvent"] ;
    $descriptionEvent = $_POST["descriptionEvent"];
    $lieu = $_POST['lieu_event'];
    $date = $_POST['date_event'];
    $idE = $_SESSION['user']['idEtudiant'];
    $idEvent = time(); 
    $sql = 'INSERT INTO evenement(idEvenement,idEtudiant,nomEvent,descriptionEvent,dateEvent,lieu) values ("'.$idEvent.'","'.$idE.'","'.$nomEvent.'","'.$descriptionEvent.'","'.$date.'","'.$lieu.'")';
    if (mysqli_query($con, $sql)) {
        
        $sql1 = 'INSERT INTO proposer(idEtudiant,idEvenement,idClub) values ("'.$idE.'","'.$idEvent.'","'.$idClub.'")';
        if(mysqli_query($con, $sql1)){
         header('location: home.php');

         
        }
        
        else echo "Error: " . $sql . ":-" . mysqli_error($con); 
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
        
     }



    ?>