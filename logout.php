<?php
require 'dbConnect.php';
session_start();
session_destroy();
header('location: index.php');
mysqli_close($con);
?>