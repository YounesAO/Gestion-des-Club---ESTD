<?php
//connection a la bade de données
require 'dbConnect.php';
//recevois des information d'inscription 
// $nom=$_POST['nom'];
// $prenom=$_POST['prenom'];
// $cne=$_POST['cne'];
// $email=$_POST['email'];
// $password=$_POST['password'];
// $userName=$_POST['userName'];
// //inserer les in formation 
// $sql = 'INSERT INTO etudiant(nomEtudiant,prenomEtudiant,CNE,email,password,userName) values ("'.$nom.'","'.$prenom.'","'.$cne.'","'.$email.'","'.$password.'","'.$userName.'")';
// if (mysqli_query($con, $sql)) {
//       echo "inscription done";
// }  else {
//       echo "Error: " . $sql . ":-" . mysqli_error($con);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>sign up</title>
      <link rel="stylesheet" href="CSS/createClubeStyle.css?v=<?php echo time(); ?>">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;700&amp;family=Roboto:wght@300&amp;family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500&amp;display=swap"
            rel="stylesheet">
</head>

<body>
      <div class="formStyle">
            <header>entrez votre informationes</header>
            <form action="lesActiones.php" method="post" class="formUser" target="votar">
                  <input type="text" name="nom" placeholder="le nom">
                  <input type="text" name="prenom" placeholder="le prénom">
                  <input type="text" name="cne" placeholder="le numéro de la carte nationale">
                  <input type="text" name="filiere" placeholder="filière">
                  <input type="text" name="date_naissance" placeholder="date naissance" onfocus="(this.type='date')">
                  <input type="text" name="status" placeholder="status">
                  <input type="text" name="pseudo" placeholder="pseudo">
                  <input type="text" name="user_name" placeholder="user name">
                  <input type="password" name="motDePasse" placeholder="mot de passe">
                  <input type="file" name="img_of_user" placeholder="votre image">
                  <div class="submitYourField">
                        <input type="submit" value="next" name="Submit" class="submit">
                  </div>
            </form>
      </div>
</body>
<script>
      document.querySelector(`input[name='date_naissance']`).onblur = function() {
            document.querySelector(`input[name='date_naissance']`).setAttribute('type','text')
      }
</script>
</html>