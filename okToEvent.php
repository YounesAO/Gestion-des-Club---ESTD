<?php
require 'dbConnect.php';
$value = $_GET['value'];
$ideve = $_GET['eve'];
$idClub = $_GET['idClub'];

echo($value.$idClub.$ideve);

if($value){
$sql = "UPDATE proposer SET valide = 1 where idEvenement = $ideve and idClub = '$idClub'";
}else{
$sql = "DELETE FROM proposer  WHERE idEvenement = $ideve";
}
$result = mysqli_query($con, $sql);

if ($result) {
    echo ' successfully';
} else {
    echo 'Error inserting record: ' . mysqli_error($conn);
}?>