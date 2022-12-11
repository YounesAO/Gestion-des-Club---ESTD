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
  background-color: #D2D2D2;
}
ul{
    display :flex ;
    flex-direction: column;
    text-decoration: none;
    padding: 5px;

}
li{
    margin-top: 10px;
    font-size: large;
}
.home{
    margin-left: 100px;
    display: flex;
    flex-direction: column;
}
</style>

    <nav>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">Clubs</a></li>
        <li><a href="#contact">Chat</a></li>
        <li><a href="logout.php">Logout</a></li>

    </ul>
    </nav>
<div class="home ">
<?php echo'
<h1> welcome '.$_SESSION['user']['nomEtudiant'] .' '.$_SESSION['user']['prenomEtudiant'].'</h1>';
?>
    <div class="container-fluid d-flex justify-content-center  m-2">
        <button class="btn btn-warning p-3 m-1 col-sm-3 " type="button"  data-bs-toggle="modal" data-bs-target="#AddEvent">Proposer un Event</button>
        <button class="btn btn-warning p-3 m-1 col-sm-3">Proposer un Event</button>

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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="sublmit"   class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    //modale bootstrap 
    var myModal = document.getElementById('myModal')
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