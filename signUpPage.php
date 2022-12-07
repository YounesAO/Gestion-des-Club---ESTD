<?php
require 'dbConnect.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrire</title>
</head>
<body>
    <style>
        .form{
            background-color: #D2D2D2;
            color: #FfFFFF;
            margin-top: 10%;
            margin-left: 37.33%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: fit-content;
            padding: 10px;
            font-size: large;
            border-radius: 10px;
        }
        input {
                margin: 10px;
        }
        #password ,#userName,#nom,#prenom,#email,#cne{
            font-size: large;
            width: 90%;

        }
        button{
            width: 400px;
            height: 50px;
        }
    </style>
 <div class ="form">
    <form action="signUp.php" method="POST">
    <h1>S'Inscrire</h1>

        <Label for ="nom">Nom </Label><br>
        <input type="text" name="nom" id="prenom"><br>
        <Label for ="text">Prenom      : </Label><br>
        <input type="text" name="prenom" id="prenom"><br>
        <Label for ="userName">Nom d'utilisateur : </Label><br>
        <input type="text" name="userName" id="userName"><br>
        <Label for ="password">Mot de passe      : </Label><br>
        <input type="password" name="password" id="password"><br>
        <Label for ="cne">CNE      : </Label><br>
        <input type="text" name="cne" id="cne"><br>
        <Label for ="email">Mot de passe      : </Label><br>
        <input type="email" name="email" id="email"><br>
        <button value ='submit'>Valide</button>
    </form>
 </div>
</body>
</html>