<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Espace Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/homeStyle.css">
      <!-- Loading the v6 core styles and the Solid and Brands styles -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\fontawesome.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\brands.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\solid.css" rel="stylesheet">

    <!-- update existing v5 CSS to use v6 icons and assets -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\v5-font-face.css" rel="stylesheet">
   
</head>
<body>
 

    <nav>
    <ul class="nav nav-tabs">
        <li class ="nav-item">
        <img src="images/logo.png" alt="" srcset="">

        <a class="nav-link" data-bs-toggle="tab"   href="#home"> <i class="fa fa-home" aria-hidden="true"></i> <span>Home</span></a>
      </li>
        <li class ="nav-item">
          <a class="nav-link" data-bs-toggle="tab"  href="#clubs"><i class="fa-solid fa-users"></i> <span>Clubs</span></a>
        </li>
        <li class ="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#create"><i class="fa-solid fa-square-plus"></i> <span>Create</span></a>
        </li>
        <li class ="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#inbox"><i class="fa-solid fa-bullhorn"></i><span>Inbox</span></a>
        </li>
        <li class ="nav-item">
          <a class="nav-link logout" href="logout.php"><i class="fa-solid fa-door-closed"></i>Logout</a>
        </li>

    </ul>
    </nav>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
    <h1>Welcome</h1>
    <?php echo'<span>  '.$_SESSION['user']['nomEtudiant'] .' '.$_SESSION['user']['prenomEtudiant'].'</span>';?>
        
  </div>

  <div class="tab-pane container fade" id="clubs">
      <h1>My Clubs</h1>
      <div class="C=container d-flex">
      <div class="card" style="width:200px">
        <img class="card-img-top" src="images\logo1.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Club 2</h4>
            <p class="card-text">Some example text.</p>
            <div>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddEvent">propose event</a>
            </div>
          </div>
        </div>

        <div class="card" style="width:200px">
        <img class="card-img-top" src="images\logo1.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Club 1</h4>
            <p class="card-text">Some example text.</p>
            <div>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddEvent">propose event</a>
            </div>
          </div>
          
        </div>
      </div>
  </div>

  <div class="tab-pane container fade" id="create">
      <h1>Créer un club</h1>
      <p>la durée de la creation des nouveaux clubs,sera expiré  le <span class='deadline'>23/10</span></p>
      <a class='btn btn-warning p-2 shadow ' href="createClube.php">Start la procedure</a>
    
  </div>

  <div class="tab-pane container fade" id="inbox">
      <h1>Announces</h1>
      
    
  </div>


<script>
    //modale bootstrap 
    var myModal = document.getElementById('AddEvent')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>