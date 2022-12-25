<?php
require 'dbConnect.php';
$value = $_GET['value'];
$idsp = $_GET['idsp'];
$idClub = $_GET['idclub'];

echo($value.$idClub.$idsp);

if($value){
$sql = "UPDATE creer SET idSP = '1' WHERE idClub = '$idClub'";
}else{
$sql = "DELETE FROM creer  WHERE idClub = '$idClub'";
}
$result = mysqli_query($con, $sql);

if ($result) {
    $etudiant = mysqli_fetch_assoc(mysqli_query($con,"select idEtudiant from creer where idClub = '$idClub'"));
    $idetudiant  =$etudiant['idEtudiant'];
    $sql = "Update etudiant set role ='$idClub' where idEtudiant = $idetudiant";
    mysqli_query($con,$sql);
    $sql1 = "INSERT INTO integrer(`idClub`, `IdEtudiant`, `valide`) VALUES ('".$idClub."', '".$idetudiant."',1)";
    mysqli_query($con,$sql1);

    echo ' successfully';
} else {
    echo 'Error inserting record: ' . mysqli_error($conn);
}
header('location: Service.php');

?>