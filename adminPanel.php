<?php
session_start();
require 'functions.php';
$clubId = $_SESSION['user']['role'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : <?php nomClub($clubId);?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/adminPanelStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">    <!-- update existing v5 CSS to use v6 icons and assets -->

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
        <li class="nav-item">
        <img src="images/logo.png" alt="" srcset="">

        <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="fa fa-home" aria-hidden="true"></i> </a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#requests"> <i class="fa fa-user-circle" aria-hidden="true"></i></i></a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#events"><i class="fas fa-newspaper    "></i></a></li>
        <li class="nav-item"><a class='logout nav-link' S href="logout.php"><i class="fas fa-door-open    "></i></a></li>

    </ul>
</nav>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container home active" id="home">
      <div class="container-fluid bg-pri p-2 m-1 d-flex justify-content-center ">
    <span class=" " > <?php nomClub($clubId);?></span>
    </div>
   <div class="d-flex widgets ">
        <div class="nbMember shadow m-1" >
          <span>200 </span><p> <i class="fa fa-user" aria-hidden="true"></i></p>
          <p class="nextEventText ">Membres</p>
        </div>
        <div class="nbMember shadow m-1" >
          <span>200  </span><p><i class="fa fa-user" aria-hidden="true"></i></p>
          <p class="nextEventText">Requests</p>
        </div>
        <div class="nbMember shadow m-1 nextEvent" >
          <p class ="nextEventText "><i class="fa fa-calendar" aria-hidden="true"></i> next event </p>
          <span class="dat">20-09-2023  </i></span>
        </div>
   </div>
    </div>

  <div class="tab-pane container fade" id="requests">
    <h3>requests d'integration du votre club </h3>
    <div class="requests">
    <?php $role = $_SESSION['user']['role'];Requests($role);?>
   </div>
  </div>
  <div class="tab-pane container fade" id="events">
  <h3>Evenement proposés par les membres </h3> <br>
  <div class=" d-flex flex-wrap events">
    <?php events($clubId); ?>
    <div class="card" >
    <img class="card-img-top" src="images\logo1.png" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">Event</h4>
        <p class="card-text">Proposer par username</p>
        <div>
        <a href="#" class="btn btn-primary">Valider</a>
        <a href="#" class="btn btn-danger">Refuser</a>
        </div>
    </div>
  </div>
  </div>
 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>