<?php
require 'dbConnect.php';
$value = $_GET['value'];
$ideve = $_GET['eve'];
$idClubsql = mysqli_fetch_assoc(mysqli_query($con,"select idClub from proposer where idEvenement =$ideve "));
$idClub = $idClubsql['idClub'];
echo($value.$ideve);

if($value){
$sql = "INSERT INTO organiser (idEvenement,idClub,valide)values('$ideve','$idClub',0)";
$result = mysqli_query($con, $sql);
$sql1 = "DELETE FROM proposer  WHERE idClub = '$idClub' and idEvenement = $ideve";

$result1 = mysqli_query($con, $sql1);

}else{
$sql = "DELETE FROM proposer  WHERE idClub = '$idClub' and idEvenement = $ideve";
}
$result = mysqli_query($con, $sql);

if ($result) {

    echo ' successfully';
} else {
    echo 'Error inserting record: ' . mysqli_error($con);
}
header("location: Service.php");
?>