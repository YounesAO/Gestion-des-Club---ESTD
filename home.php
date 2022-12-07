<?php
session_start();

echo'
<h1> welcome '+$_SESSION['user']['nom'] +' </h1>
';

?>