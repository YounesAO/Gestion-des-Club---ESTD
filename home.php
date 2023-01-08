<?php
session_start();
require 'dbConnect.php';
require 'functions.php';
require 'Anonces.php';
    if(!isset($_SESSION['user'])){
        header("location: loginPage.php");
    } else {
        $data = $_SESSION['user'];
        $query = "SELECT c.idClub,nomClub,logo,Slogan FROM club c,integrer i where c.idClub = i.idClub and IdEtudiant = $data[0] and valide = 1";
        $doQuery = mysqli_query($con,$query);
        $clubes = mysqli_fetch_all($doQuery,MYSQLI_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Espace Etudiant</title>
    <link rel="shortcut icon" href="images\logo1.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/homeStyle.css?v=<?php echo time(); ?>">
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="CSS/all.min.css">
    <!-- update existing v5 CSS to use v6 icons and assets -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\v5-font-face.css" rel="stylesheet">
    <!-- Loading the v6 core styles and the Solid and Brands styles -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\fontawesome.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\brands.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\solid.css" rel="stylesheet">
    <!-- script -->
    <script type="module">
    import {
        afficher_les_informationes,afficher_mes_clubes
    } from "./script/homeScript.js";
    const data = <?php echo json_encode($data); ?>;
    const clubes = <?php echo json_encode($clubes); ?>;
    afficher_les_informationes(data);
    afficher_mes_clubes(clubes)
    </script>
    <script src="script/homeScript.js" type="module" defer></script>
</head>

<body>
    <aside class="bg-w txt-c pd-three txt-cap">
        <p class="mb-40 prenom"></p>
        <ul>
            <li>
                <a data-bs-toggle="tab" href="#home"> <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a data-bs-toggle="tab" href="#clubs"><i class="fa-solid fa-users"></i>
                    <span>Clubs</span>
                </a>
            </li>
            <li>
                <a data-bs-toggle="tab" href="#create"><i class="fa-solid fa-square-plus"></i>
                    <span>Create</span></a>
            </li>
            <li>
                <a data-bs-toggle="tab" href="#inbox">
                    <i class="fa-solid fa-bullhorn"></i><span>Inbox</span>
                </a>
            </li>
            <?php 
                if ($data['role'] != 0) {
                    echo '
                    <li>
                        <a href="adminPanel.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span>control panel</span></a>
                    </li>
                    ';
                }
            ?>
            <li>
                <a href="logout.php"><i class="fa-solid fa-door-closed"></i>Logout</a>
            </li>
        </ul>
    </aside>

    <!-- Tab panes -->
    <main>
        <!-- start nav bar -->
        <header>
            <nav id="navBar" class="d-flex justify-content-between align-items-center p-3 position-relative">
            <img src="images/logo1.png" alt="" srcset="" style="max-width:40px">
                <div class="center">
                    <span><i class="fa-regular fa-bell"></i></span>
                    <img src="images/avatar.png" alt="profile image" srcset="">
                </div>
            </nav>
        </header>
        <!-- end nav bar -->
        <!-- start main content -->
        <div class="tab-content content">
            <div class="tab-pane active " id="home">
                <h1 class="position-relative text-align-center">home</h1>
                <!-- start bienvenue page -->
                <div id="greeting" class="partOfContent">
                    <header class="d-flex justify-content-between align-items-center" style="background:#eee;">
                        <div style="align-self: flex-start;">
                            <h2>Bienvenue</h2>
                            <p class="nom_prenom"></p>
                        </div>
                        <img src="images/welcome.png" alt="welcome">
                    </header>
                    <div>
                        <img src="images/avatar.png" alt="profile icon" srcset="">
                        <div class="information-about-me">
                            <div>
                                <span class="nom"></span>
                                <p class="prenom"></p>
                            </div>
                            <div>
                                <span>Filière</span>
                                <p class="filiere"></p>
                            </div>
                            <div>
                                <span>Niveau</span>
                                <p class="niveau"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end bienvenue page -->
            <!-- start clubes page -->
            <div class="tab-pane container fade" id="clubs">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>My Clubs</h1>
                    <a class="btn m-3 align-self-center mr-2 btn-success" href="clubProfil.php">Intégrer <i
                            class="fa fa-plus" aria-hidden="true"></i></a>
                    <div class="d-none event">
                        <a href="EventForm.php?idClub=1" class="btn btn-primary" >Proposer event</a>
                    </div>
                </div>
                <div class="lesClubes">
                </div>
            </div>
            <!-- end clubes page -->
            <!-- start create -->
            <div class="tab-pane container fade" id="create">
                <h1>Créer votre club</h1>
                <p>la durée de la creation des nouveaux clubs,sera expiré le <span class='deadline'>23/10</span></p>
                <a class='btn btn-warning p-2 shadow ' href="createClube.php">Start la procédure</a>
            </div>
            <!-- start create -->
            <!-- start inbox -->
            <div class="tab-pane container fade" id="inbox">
                <h1>Announces</h1>
                <div>
                <?php
                $Query = mysqli_query($con,"select c.idClub from club c,integrer i where c.idClub = i.idClub and i.IdEtudiant = ".$data[0].";");
                while($row = mysqli_fetch_assoc($Query)){
                annonces($row['idClub']); }?>
                </div>
            </div>
            <!-- start inbox -->
        </div>
        <!-- end main content -->
    </main>
</body>

</html>