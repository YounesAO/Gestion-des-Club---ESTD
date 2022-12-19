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
    <!-- css -->
    <link rel="stylesheet" href="CSS/indexPageStyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/createClubeStyle.css?v=<?php echo time(); ?>">    
    <link rel="stylesheet" href="CSS/signUpStyle.css?v=<?php echo time(); ?>">    
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;700&amp;family=Roboto:wght@300&amp;family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500&amp;display=swap"
        rel="stylesheet">
    <!-- include bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- start navbar -->
    <header>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
                <span class="navbar-brand" href="#">
                    <img src="images/logo1.png" alt="" srcset="" style="max-width:80px">
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clubs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginPage.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end navbar -->
    <!-- start ajouter club -->
    <div class="container_of_container">
        <div class="ajouterClube formStyle container">
            <header>nouveau clube</header>
            <form action="" method="POST" target="votar">
                <input type="text" name="nomclube" placeholder="nom de clube">
                <div class="logoDeClube">
                    <input type="file" name="logoDeClube">
                    <label>logo de clube</label>
                </div>
                <textarea name="description_de_clube" cols="30" rows="2" placeholder="description de clube"></textarea>
                <textarea name="objectifs_de_clube" cols="30" rows="2" placeholder="objectifs de clube"></textarea>
                <textarea name="les_membres_de_bureau" cols="30" rows="2" 
                    placeholder="les membres de bureau ( écrivez le nom, prénom et ajoutez / ) : "></textarea>
                <div class="submitYourField">
                    <input type="submit" name="submit" value="valider" class="submit">
                </div>
            </form>
        </div>
    </div>
    <!-- end ajouter club -->
    <!-- start footer -->
    <footer>
        <div class="lesCoordonnees">
            <div class="container theFirstPart0fFooter">
            <div class="aPropos">
                <div class="title">a propos</div>
                <div>
                    <div>
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div>ecole supérieur de la technologie dakhla , oum bouir</div>
                    </div>
                    <div>
                    <i class="fa fa-phone fa-fw"></i>
                    <div class="phone">
                        <span>+212-528-00-00-00</span>
                    </div>
                    </div>
                    <div>
                        <i class="fa fa-phone fa-fw"></i>
                        <div class="phone">
                            <span>+212-528-00-00-00</span>
                        </div>
                        </div>
                        </div>
            </div>
            <div class="gallery">
                <div class="title">gallery</div>
                <div class="container-of-images">
                        <img src="images/event1.jpg" alt="" srcset="">
                        <img src="images/event2.jpg" alt="" srcset="">
                        <img src="images/event1.jpg" alt="" srcset="">
                        <img src="images/event2.jpg" alt="" srcset="">
                        <img src="images/event1.jpg" alt="" srcset="">
                        <img src="images/event2.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="theSecondPartOfFooter">
                <p>© 2021,EST Dakhla. Tous les droits sont réservés.</p>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>