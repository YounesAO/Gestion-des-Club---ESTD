<?php
session_start();
$Club =$_SESSION['user']['role'];
require 'dbConnect.php';
$value=$_GET['value'];
$id = $_GET['id'];
if($value=true){
    $query = "UPDATE integrer SET valide=1 WHERE (idEtudiant=$id) and (idClub =$Club);"; 

// Execute the query
if (mysqli_query($con, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}


}


if($value=false){
    $query = "DELETE FROM integrer  WHERE (idEtudiant=$id) and (idClub =$Club); ";

// Execute the query
if (mysqli_query($con, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}
header("location: adminPanel.php");
}
?>