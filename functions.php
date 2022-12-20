<?php

function myClubs($para) {
    
  
require 'dbConnect.php';

$sqlR = " select nomClub,c.idClub, Slogan from club c ,integrer i  where i.IdEtudiant = '".$para."';";
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


?>