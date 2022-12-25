<?php
session_start();
$idET=$_SESSION['user']['idEtudiant'];
require 'dbConnect.php';
if ($con) {
    $nomclube=$_POST['nomclube'];
    $description_de_clube=$_POST['description_de_clube'];
    $objectifs_de_clube=$_POST['objectifs_de_clube'];
    $les_membres_de_bureau=$_POST['les_membres_de_bureau'];
    $dateCreation=gmdate('Y-m-d');
    [$nomDeLogo,$type] = explode(".",$_FILES['logoDeClube']['name']);
    $tmpname = $_FILES['logoDeClube']['tmp_name'];
    $logoNewName = uniqid('',true).".".$type;
    $destination = 'uploads/'.$logoNewName;
    $Slogan = $_POST['Slogan'];
    move_uploaded_file($tmpname,$destination);
    if(!empty($_POST['submit'])){
        $query = "INSERT INTO `club`(`nomClub`, `description`,
            `dateCreation`,`logo`,`Slogan`,`les_membres_de_bureau`,`lesObjectifs`) 
            VALUES ('$nomclube','$description_de_clube','$dateCreation','$logoNewName','$Slogan','$les_membres_de_bureau','$objectifs_de_clube')";
        $resi = mysqli_query($con,$query);
        print_r($resi);
        $idclub  = mysqli_fetch_assoc(mysqli_query($con,"select idClub FROM club WHERE (nomClub = '".$nomclube."' );"));
        $sql = "INSERT INTO `creer` (`idClub`, `IdEtudiant`, `idSP`) VALUES (".$idclub['idClub'].", $idET, NULL);";
        mysqli_query($con,$sql);
        
    }
}

?>