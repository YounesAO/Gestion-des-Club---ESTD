<?php
session_start();
require 'dbConnect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de Service  Parascolaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Service.css">
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

        <a class="nav-link active" data-bs-toggle="tab" href="#Dashboard"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#clubs"> <i class="fa fa-user-circle" aria-hidden="true"></i> clubs requests</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#events"><i class="fas fa-newspaper    "></i> events</a></li>
        <li class="nav-item"><a class='logout nav-link' S href="logout.php"><i class="fas fa-door-open    "></i></a></li>

    </ul>
</nav>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container home active" id="Dashboard">
    <span id="club"> HIGH TECH</span>
   <div class="d-flex widgets ">
        <div class="stat-widget shadow" >
          <span class="stat-num">9  <i class="fa fa-user" aria-hidden="true"></i></span>
          <span class="stat-text">Club</span>
        </div>
        <div class="nbMember shadow nextEvent" >
          <p class ="nextEventText"><i class="fa fa-calendar" aria-hidden="true"></i> next event </p>
          <span>20-09-2023  </i></span>
        </div>
   </div>
    </div>

  <div class="tab-pane container fade" id="clubs">
    <h3>requests d'integration du votre club </h3>
    <div class="card" >
    <img class="card-img-top" src="images\img_avatar1.png" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <div>
        <a href="#" class="btn btn-primary">Accepter</a>
        <a href="#" class="btn btn-danger">Refuser</a>
        </div>
    </div>
</div>
  </div>
  <div class="tab-pane container fade" id="events">
  <h3>Evenement proposés par les clubs </h3> 

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>