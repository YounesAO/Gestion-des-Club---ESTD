<?php
//connection a la base de données 
//Importer la connection à la base de données
require 'dbConnect.php';
if ($con) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $cne=$_POST['cne'];
    $niveau=$_POST['niveau'];
    $filiere=$_POST['filiere'];
    $dateNaissance = $_POST['date_naissance'];
    $password=$_POST['motDePasse'];
    $userName=$_POST['user_name'];
    if(!empty($_POST['Submit'])){
        $query = "INSERT INTO `etudiant`(`nomEtudiant`, `prenomEtudiant`, `CNE`, `filiere`, `niveau`, `dateNaissance`, `password`, `userName`) 
            VALUES ('$nom','$prenom','$cne','$filiere','$niveau','$dateNaissance','$password','$userName')";
        mysqli_query($con,$query);
    }
}

?>
