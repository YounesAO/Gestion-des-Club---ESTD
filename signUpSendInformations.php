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
    $sexe=$_POST['sexe'];
    // nauveau code
    print_r($_FILES['imgofuser']);
    if($_FILES['imgofuser']['size']!=0){
    [$nomDImage,$type] = explode(".",$_FILES['imgofuser']['name']);
    $tmpname = $_FILES['imgofuser']['tmp_name'];
    $imageNewName = uniqid('',true).".".$type;
    $destination = 'imagesOfUsers/'.$imageNewName;
    move_uploaded_file($tmpname,$destination);}
    else {$imageNewName = 'img_avatar1.png';}
    // nauveau code
    if(!empty($_POST['Submit'])){
        $query = "INSERT INTO `etudiant`(`nomEtudiant`, `prenomEtudiant`, `CNE`, `filiere`, `niveau`, `dateNaissance`, `password`, `userName`,`img`,`sexe`) 
            VALUES ('$nom','$prenom','$cne','$filiere','$niveau','$dateNaissance','$password','$userName','$imageNewName','$sexe')";
        mysqli_query($con,$query);
    }
}

?>
