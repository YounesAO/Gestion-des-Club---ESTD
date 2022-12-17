<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>créer votre clube</title>
    <link rel="stylesheet" href="CSS/createClubeStyle.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;700&amp;family=Roboto:wght@300&amp;family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="ajouterClube formStyle">
        <header>nouveau clube</header>
        <form action="" method="POST" target="votar">
            <input type="text" name="nomclube" placeholder="nom de clube">
            <input type="file" name="logoDeClube">
            <textarea name="description_de_clube" cols="30" rows="2" placeholder="description de clube"></textarea>
            <textarea name="objectifs_de_clube" cols="30" rows="2" placeholder="objectifs de clube"></textarea>
            <textarea name="les_membres_de_bureau" cols="30" rows="2" 
                placeholder="les membres de bureau ( écrivez le nom, prénom et ajoutez / ) : "></textarea>
            <div class="submitYourField">
                <input type="submit" name="submit" value="valider" class="submit">
            </div>
        </form>
    </div>
</body>

</html>