<?php
require 'dbConnect.php';
$idClub=$_GET['idClub'];

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
            <form action="proposeEvent.php?idClub=<?php echo $idClub; ?>" method="POST" target="votar" enctype="multipart/form-data">
                <input type="text" name="nomEvent" placeholder="le nom de l'Event">
                <textarea name="descriptionEvent" cols="30" rows="2" placeholder="la description de votre Event"></textarea>
                <input type="text" name="date_event" placeholder="Date de l'évenènement" onfocus="(this.type='date')">
                <input type="text" name="lieu_event" placeholder="lieu de l'évenènement">
                <div class="submitYourField">
                    <input type="submit" name="submit" value="valider" class="submit">
                </div>
            </form>
        </div>
    </div>
    <!-- end ajouter club -->
    

</body>
</html>