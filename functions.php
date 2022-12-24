<?php

function myClubs($para) {
    
  
require 'dbConnect.php';

$sqlR = " select nomClub,i.idClub, Slogan from club c ,integrer i  where (i.IdEtudiant = $para)and (valide = 1) and (i.idClub = C.idClub);";
$result = mysqli_query($con, $sqlR);

// Check if the SELECT query was successful
if (mysqli_num_rows($result) > 0) {
  // Output the result of the SELECT query
      while($row = mysqli_fetch_assoc($result)) {

        echo'<div class="card" style="width:250px">
        <img class="card-img-top" src="images\logo1.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">'.$row['nomClub'].'</h4>
            <p class="card-text">'.$row['Slogan'].'</p>
            <div>
              <a href="EventForm.php?idClub='.$row['idClub'].'" class="btn btn-primary" >propose event</a>
            </div>
          </div>
        </div>
            
            
        
        ';
      }
    } else {
      echo "0 results";
    }
}

function Requests($ram) {
    
  
    require 'dbConnect.php';
    
    $sqlRe = " select e.idEtudiant,nomEtudiant,prenomEtudiant, filiere from etudiant e ,integrer i   where (i.idEtudiant = e.idEtudiant) and valide = 0 and i.idClub ='".$ram."';";
    $result1 = mysqli_query($con, $sqlRe);
    
    // Check if the SELECT query was successful
    if (mysqli_num_rows($result1) > 0) {
      // Output the result of the SELECT query
          while($row = mysqli_fetch_assoc($result1)) {
    
            echo'<div class="card">
            <img class="card-img-top" src="images\img_avatar1.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">'.$row['nomEtudiant'].' '.$row['prenomEtudiant'].'</h4>
                <p class="card-text">'.$row['filiere'].'</p>
                <div>
                <a href="accept.php?value=true&id='.$row['idEtudiant'].'" class="btn btn-primary">Accepter</a>
                <a href="accept.php?value=false&id='.$row['idEtudiant'].'" class="btn btn-danger">Refuser</a>
                </div>
            </div>
            </div>
             ';
          }
        } else {
          echo "<span class='bg-light p-1 m-1 dark '>0 results<span>";
        }
    }
    function events($param){
      require 'dbConnect.php';
      $sqlRe = " select * from evenement   where idEvenement in (select idEvenement from proposer where idClub =$param and valide = 0 );";
      $result1 = mysqli_query($con, $sqlRe);
      
      // Check if the SELECT query was successful
      if (mysqli_num_rows($result1) > 0) {
        // Output the result of the SELECT query
            while($row = mysqli_fetch_assoc($result1)) {

                echo' <div class="card m-1" >
                <img class="card-img-top" src="images\logo1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">'.$row['nomEvent'].'</h4>
                    <p class="card-text">'.$row['descriptionEvent'].' Proposer par username</p>
                    <div>
                    <a href="okToEvent.php?value=true&idClub='.$param.'&eve='.$row['idEvenement'].' " class="btn btn-primary">Valider</a>
                    <a href="okToEvent.php?value=false&idClub='.$param.'&eve='.$row['idEvenement'].' " class="btn btn-danger">Refuser</a>
                    </div>
                </div>
              </div>';
            }}
      
    }
?>