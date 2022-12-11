<?php
require "dbConnect.php";
session_start();
    $nomEvent = $_POST["nomEvent"] ;
    $descriptionEvent = $_POST["descriptionEvent"];
    $idE = $_SESSION['user']['idEtudiant'];
    $idEvent = time(); 
    $sql = 'INSERT INTO evenement(idEvenement,idEtudiant,nomEvent,descriptionEvent) values ("'.$idEvent.'","'.$idE.'","'.$nomEvent.'","'.$descriptionEvent.'")';
    if (mysqli_query($con, $sql)) {
        
        $sql1 = 'INSERT INTO proposer(idEtudiant,idEvenement) values ("'.$idE.'","'.$idEvent.'")';
        if(mysqli_query($con, $sql1))
        echo "inscription done";
        else echo "Error: " . $sql . ":-" . mysqli_error($con); 
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
        print_r($_SESSION['user']);
     }



    ?>