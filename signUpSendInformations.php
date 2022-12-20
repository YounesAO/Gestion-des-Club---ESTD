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
    // nauveau code
    [$nomDImage,$type] = explode(".",$_FILES['imgofuser']['name']);
    $tmpname = $_FILES['imgofuser']['tmp_name'];
    $imageNewName = uniqid('',true).".".$type;
    $destination = 'imagesOfUsers/'.$imageNewName;
    move_uploaded_file($tmpname,$destination);
    // nauveau code
    if(!empty($_POST['Submit'])){
        $query = "INSERT INTO `etudiant`(`nomEtudiant`, `prenomEtudiant`, `CNE`, `filiere`, `niveau`, `dateNaissance`, `password`, `userName`,`img`) 
            VALUES ('$nom','$prenom','$cne','$filiere','$niveau','$dateNaissance','$password','$userName','$imageNewName')";
        mysqli_query($con,$query);
    }
}

?>
