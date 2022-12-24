<?php
//connection a la base de données 
//Importer la connection à la base de données
session_start();
$idET=$_SESSION['user']['idEtudiant'];
require 'dbConnect.php';
if ($con) {
    $nomclube=$_POST['nomclube'];
    $description_de_clube=$_POST['description_de_clube'];
    $objectifs_de_clube=$_POST['objectifs_de_clube'];
    $dateCreation=gmdate('Y-m-d');
    [$nomDeLogo,$type] = explode(".",$_FILES['logoDeClube']['name']);
    $tmpname = $_FILES['logoDeClube']['tmp_name'];
    $logoNewName = uniqid('',true).".".$type;
    $destination = 'uploads/'.$logoNewName;
    $Slogan = $_POST['Slogan'];
    move_uploaded_file($tmpname,$destination);
    if(!empty($_POST['submit'])){
        $query = "INSERT INTO `club`(`nomClub`, `description`,
            `dateCreation`, `lesObjectifs`,`logo`,`Slogan`) 
            VALUES ('$nomclube','$description_de_clube','$dateCreation','$objectifs_de_clube','$logoNewName','$Slogan')";
        $resi = mysqli_query($con,$query);
        echo($query);
        print_r($resi);
       $idclub  = mysqli_fetch_assoc(mysqli_query($con,"select idClub FROM club WHERE (nomClub = '".$nomclube."' );"));
        $sql = "INSERT INTO `creer` (`idClub`, `IdEtudiant`, `idSP`) VALUES (".$idclub['idClub'].", $idET, NULL);";
        mysqli_query($con,$sql);

        
    }
    // [$nomDeFichier,$type] = explode(".",$_FILES['fileUpload']['name']);
    //         $taille = $_FILES['fileUpload']['size'];
    //         $folderId = $_POST['folderId'];
    //         $dateDeCreation = gmdate('Y-m-d H:i:s \G\M\T');

    //         $tmpname = $_FILES['fileUpload']['tmp_name'];
    //         $fileNewName = uniqid('',true).".".$type;
    //         $destination = 'upload/'.$fileNewName;

    //         move_uploaded_file($tmpname,$destination);
}

?>