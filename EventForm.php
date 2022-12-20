<?php
require 'dbConnect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event </title>
    <link rel="stylesheet" href="CSS/EventFormStyle.css">
</head>
<body>
    <!--start formulaire -->
<div class="container_of_container">
        <div class="ajouterClube formStyle container">
            <header>Proposez un evenement</header>
            <form action="proposeEvent.php?idClub=1" method="POST" target="votar" enctype="multipart/form-data">
           
                <label for="nomEvent">le nom de l'Event</label>
                <input type="text" name="nomEvent" placeholder="">
                <label for="descriptionEvent">la description de l'Event</label>	
                <textarea name="descriptionEvent" cols="30" rows="10" placeholder="la description de votre Event"></textarea>
               
                <div class="submitYourField">
                    <input type="submit" name="submit" value="valider" class="submit">
                </div>
            </form>
        </div>
    </div>
    <!-- end ajouter club -->
    

</body>
</html>