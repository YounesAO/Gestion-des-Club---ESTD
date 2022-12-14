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

</head>
<body>
 <style>
        nav {
  position: fixed;
  left: 0;
  top: 0;
  width: 100px;
  height: 100%;
  background-color: #8A97BF;
}
ul{
    display :flex ;
    flex-direction: column;
    text-decoration: none;
    padding: 5px;

}
li{
  display:flex;
  flex-direction: column;
  justify-content :center;
  align-items:center;
    margin-top: 10px;
    font-size: large;
}
.home{
    margin-left: 100px;
    display: flex;
    flex-direction: column;
}
li img{
  width : 80px;
  
}
.nav-link{
  color:white;
text-decoration:none;
font-size : large;
}
.home span{
  font-family: "Poppins 500","Noto Sans Regular","Helvetica Neue",Arial,sans-serif;
  font-weight:bold;
  padding:10px;
  margin-left : 0px;
  font-size: 18px;
  color: black;
  background-color:#D2D2D2;

}
.home div button {
  color :white;
}
.logout{
  margin-top: 50vh;
  color :red;
  border :1px solid red ;
  padding :3px;
  border-radius:5px
}
.logout:hover{
  transition :500ms;
  background-color :red;
  color :#D2D2D2;
}
.card{
margin : 10px;
}
</style>

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
              <a href="#" class="btn btn-primary">propose event</a>
            </div>
          </div>
        </div>

        <div class="card" style="width:200px">
        <img class="card-img-top" src="images\logo1.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Club 1</h4>
            <p class="card-text">Some example text.</p>
            <div>
              <a href="#" class="btn btn-primary">propose event</a>
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


<!-- Modal -->
<div class="modal fade" id="AddEvent" tabindex="-1" aria-labelledby="AddEvent" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="proposeEvent.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Proposer un evenement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
  
      <div class="modal-body">
       
       		<div>
               <label for="nomEvent">le nom de l'Event</label>
                <input name="nomEvent" type="text"><br><br>
            </div> 
            <div>
                <label for="descriptionEvent">la description de l'Event</label>	<br><br>
                <div class="d-flex justify-content-center">
                <textarea name="descriptionEvent" id="descriptionEvent" cols="30" rows="3"></textarea>		
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="sublmit"   class="btn btn-primary">Envoyer</button>
      </div>
      </form>
    </div>
  </div>
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