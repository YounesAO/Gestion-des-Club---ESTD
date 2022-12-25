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
    $sql = "Update etudiant set role '$idClub' where idEtudaint in (select idEtudiant from creer where idClub = '$idClub')";
    mysqli_query($con,$sql);

    echo ' successfully';
} else {
    echo 'Error inserting record: ' . mysqli_error($conn);
}
header('location: Service.php');

?>