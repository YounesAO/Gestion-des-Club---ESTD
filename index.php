<?php
//Importer la connection à la base de données
require 'dbConnect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- css -->
    <link rel="stylesheet" href="CSS/indexPageStyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/all.min.css">
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
    <header>
        <!-- start navbar -->
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
                            <a class="nav-link" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lesClubes.php">Clubs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginPage.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    </header>
    <main>
        <!-- start slide -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/event1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="images/event2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/visite_estd.jpg" class="d-block mw-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- end slide -->
        <!-- start Actualités & Annonces -->
        <div class="Actualités_and_Annonces">
            <div class="container">
                <header>
                    <div class="titles">
                        Actualités & Annonces
                    </div>
                </header>
                <div class="lesAnnounces">
                    <div class="announce">
                        <img src="images/event2.jpg" alt="">
                        <div class="p-3">
                            <h3>test title</h3>
                            <p>Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet consect.</p>
                        </div>
                        <div class="footer_of_announce">
                            <a href="">read more</a>
                            <i class="fa fa-arrow-right fa-fw"></i>
                        </div>
                    </div>
                    <div class="announce">
                        <img src="images/event1.jpg" alt="">
                        <div class="p-3">
                            <h3>test title</h3>
                            <p>Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet consect.</p>
                        </div>
                        <div class="footer_of_announce">
                            <a href="">read more</a>
                            <i class="fa fa-arrow-right fa-fw"></i>
                        </div>
                    </div>
                    <div class="announce">
                        <img src="images/visite_estd.jpg" alt="">
                        <div class="p-3">
                            <h3>test title</h3>
                            <p>Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet consect.</p>
                        </div>
                        <div class="footer_of_announce">
                            <a href="">read more</a>
                            <i class="fa fa-arrow-right fa-fw"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Actualités & Annonces -->
    </main>
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
        </div>
        <div class="theSecondPartOfFooter">
            <p>© 2021,EST Dakhla. Tous les droits sont réservés.</p>
        </div>
    </footer>
    <!-- end footer -->

</html>