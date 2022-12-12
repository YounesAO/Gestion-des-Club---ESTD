<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<style>
body{
        background-color:#606E82;
 } 
nav {
  position: fixed;
  left: 0;
  top: 0;
  width: 120px!important;
  height: 100%;
  background-color:#204473;
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
   
    display: flex;
    flex-direction: column;
}
li img{
  width : 80px;
  -webkit-filter: grayscale(100%); /*black qnd zhit filter*/
  filter: grayscale(100%) invert();
  
}
li a{
  color:rgba(205,217,229,0.7);
text-decoration:none;
font-size : large;
}
.home span{
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Noto Sans",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
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
.nav-link{
    width:100%;
    text-align:center;
}
.tab-pane {
    margin-left: 150px;
    margin-top: 10px;
}
</style>
<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <img src="images/logo.png" alt="" srcset="">

        <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#requests">Requests</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact">Chat</a></li>
        <li class="nav-item"><a class='logout nav-link' data-bs-toggle="tab" href="logout.php">Logout</a></li>

    </ul>
    </nav>
<div class="home ">

</div>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container home active" id="home">
    <?php echo'
    <span>  '.$_SESSION['user']['nomEtudiant'] .' '.$_SESSION['user']['prenomEtudiant'].'</span>';
    ?>
    <div class="container-fluid d-flex justify-content-center  m-2">
        <button class="btn shadow btn-warning p-3 m-1 col-sm-3 " type="button"  data-bs-toggle="modal" data-bs-target="#AddEvent">Proposer un Event</button>
        <button class="btn shadow btn-warning p-3 m-1 col-sm-3">Proposer un Event</button>

    </div>
    </div>

  <div class="tab-pane container fade" id="requests">
    <h3>club integration reauests </h3>
    <div class="card" style="width:400px">
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
  <div class="tab-pane container fade" id="menu2">...</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>