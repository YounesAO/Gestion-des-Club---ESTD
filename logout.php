<?php
require 'dbConnect.php';
session_start();
$_SESSION['user'] = "";
header('location: index.php');
mysqli_close($con);
?>