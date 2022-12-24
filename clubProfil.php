<?php
session_start();
$idE =$_SESSION['user']['idEtudiant'];
function myClubs() {
    
    $idE =$_SESSION['user']['idEtudiant'];

    require 'dbConnect.php';
    
    $sqlR = " select * from club where idClub not in(select idClub from integrer where idEtudiant = $idE) ;";
    $result = mysqli_query($con, $sqlR);
    
    // Check if the SELECT query was successful
    if (mysqli_num_rows($result) > 0) {
      // Output the result of the SELECT query
          while($row = mysqli_fetch_assoc($result)) {
    
            echo'<div class="card m-3" style="width:250px">
            <img class="card-img-top" src="images\logo1.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">'.$row['nomClub'].'</h4>
                <p class="card-text">'.$row['Slogan'].'</p>
                <div>
                  <a href="integrer?idClub='.$row['idClub'].'" class="btn btn-success" >Join us</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intéger un club  </title>
    <link rel="stylesheet" href="CSS/EventFormStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <!--start formulaire -->
<div class="container_of_container container-fluid m-5">
<a class="btn btn-danger " href="home.php">Go back</a>

        <div class="ajouterClube formStyle container-fluid">
            <header>intéger ces clubs</header>
            <div class="container d-flex justify-content-center flex-wrap">
                <?php myClubs() ?>
               
                </div>
        </div>
    </div>
    <!-- end ajouter club -->
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>