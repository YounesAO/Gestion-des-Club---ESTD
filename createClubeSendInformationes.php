<?php
//connection a la base de données 
//Importer la connection à la base de données
require 'dbConnect.php';
if ($con) {
    $nomclube=$_POST['nomclube'];
    $description_de_clube=$_POST['description_de_clube'];
    $objectifs_de_clube=$_POST['objectifs_de_clube'];
    $dateCreation=gmdate('Y-m-d H:i:s \G\M\T');
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
        mysqli_query($con,$query);
        
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