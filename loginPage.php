<?php
require 'dbConnect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="CSS/loginPageStyle.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;700&amp;family=Roboto:wght@300&amp;family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500&amp;display=swap"
        rel="stylesheet">
</head>
<body>
    <div class ="form">
        <img src="images/logo.png" alt="" srcset="">
        <form action="login.php" method="POST">
            <h4>connexion au service</h4>
            <div>
                <Label for ="userName">Nom d'utilisateur : </Label><br>
                <input type="text" name="userName" id="userName"><br>
                <Label for ="password">Mot de passe      : </Label><br>
                <input type="password" name="password" id="password"><br>
                <a href="signUpPage.php">Inscrire</a><br>
                <button class="button" value ='submit'>Valide</button>
            </div>
        </form>
    </div>
</body>
</html>