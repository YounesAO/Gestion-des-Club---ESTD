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
.c{
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
<div class="c home">
<?php echo'
<h1> welcome '.$_SESSION['user']['nom'] .' </h1>';
?>
</div>

</body>
</html>