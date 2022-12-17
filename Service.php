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
</head>
<body>
<nav>
    <ul class="nav nav-tabs">
        <li class ="nav-item">
        <img src="images/logo.png" alt="" srcset="">

        <a class="nav-link" data-bs-toggle="tab"   href="#home">Home</a>
      </li>
        <li class ="nav-item">
          <a class="nav-link" data-bs-toggle="tab"  href="#clubs">My clubs</a>
        </li>
        <li class ="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#create">Create</a>
        </li>
        <li class ="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#inbox">Inbox</a>
        </li>
        <li class ="nav-item">
          <a class="nav-link logout" href="logout.php">Logout</a>
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
    <form action="addClub.php" method="POST">
      <table BORDER="2px">
        <tr>
          <th>
          <label for="nomClub">Nom du Club</label>
          </th>
          <th>
            <input type="text" name="nomClub">
          </th>
          
        </tr>
        <tr>
          <td>
          <label for="imgClub">logo du Club</label>
          </td>
          <td>
            <input type="file" name="imgClub">
          </td>
          
        </tr>
        <tr>
          <td>
          <label for="descClub">description du Club</label>
          </td>

          <td>
            <textarea name="descClub" id="descClub" cols="30" rows="2"></textarea>
            
          </td>
          
        </tr>
      </table>
    <button class="btn shadow btn-warning p-3 m-1 col-sm-3 " type="submit" >Créer Club</button>
    </form>
  </div>

  <div class="tab-pane container fade" id="inbox">
    <h1>Votre messages</h1>
  </div>
</div>
</body>
</html>