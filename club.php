<?php
require 'dbConnect.php';
$idClub=$_GET['idClub'];
$sel = "select * from club where idClub =$idClub ";
$result = mysqli_query($con,$sel);
$i = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information sur les club : <?php echo $i['nomClub'];?> </title>
    <link rel="stylesheet" href="CSS/EventFormStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Loading the v6 core styles and the Solid and Brands styles -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\fontawesome.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\brands.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\solid.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">    <!-- update existing v5 CSS to use v6 icons and assets -->
    
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\v5-font-face.css" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Homenaje&display=swap'); </style>
</head>
<body>
    <style>
        header{
            width: 100%;
            margin: 0;
            font-size: large;
            font-family:"Homenaje" ;
            font-weight: 400;
            letter-spacing: 3px;

        }
        .container_of_container{
            min-width: 90%;}
        .slogan span,.nom{
            background-color:gainsboro;
            font-size: larger;
            font-weight: 800;
            text-align: center;
            letter-spacing: 1px;

        }
        .cnt{
            align-items: center;
        }
        .slogan{
            margin: 0;
        }
        .slogan span{
                margin-top: 200px;
        }
        img{
            width: 300px;
        }
        
    </style>
    <!--start formulaire -->
<div class="container_of_container">
        <div class="ajouterClube formStyle container">
            <header class =" "> Informations sur le club </header>
            <div class="d-flex">
                <div class="container">
                    <div class ="slogan p-3 ">
                        <span class =" p-3"><?php echo $i['Slogan'];?></span>
                    </div>
                    <div class="p-3">
                        <p class="desc"><?php echo $i['description'];?></p>
                    </div>
                </div>
                <div class="container d-flex flex-column cnt">
                    <img src="images/logo.png" alt="">
                    <span class="nom p-3 m-1 "><?php echo $i['nomClub'];?></span>
                </div>
                
            </div>

        </div>
    </div>
    <!-- end ajouter club -->
    

</body>
</html>