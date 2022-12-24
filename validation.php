<?php
require 'dbConnect.php';
$value = $_GET['value'];
$idsp = $_GET['idsp'];
$idClub = $_GET['idclub'];

echo($value.$idClub.$idsp);

if($value){
$sql = "UPDATE creer SET idSP = '1' WHERE idClub = '$idClub'";
}
$sql = "DELETE FROM creer  WHERE idClub = '$idClub'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo ' successfully';
} else {
    echo 'Error inserting record: ' . mysqli_error($conn);
}




?>