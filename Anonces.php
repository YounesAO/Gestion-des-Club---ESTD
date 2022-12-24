<?php
function annonces($idClub){
require 'dbConnect.php';
$sql ="select * from evenement where idEvenement in (select idEvenement from organiser where idClub = $idClub);";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo' <div class ="bg-light p-3 m-1 shadow"> <h6>'.$row['nomEvent'].'</h6><p> Organise un evenement sous le thème de :'.$row['descriptionEvent'].'</p></div>';
}
}
?>