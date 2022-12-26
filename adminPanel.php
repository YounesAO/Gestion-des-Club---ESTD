<?php
session_start();
require 'functions.php';
$clubId = $_SESSION['user']['role'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : <?php nomClub($clubId);?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/adminPanelStyle.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">
    <!-- update existing v5 CSS to use v6 icons and assets -->

    <!-- Loading the v6 core styles and the Solid and Brands styles -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\fontawesome.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\brands.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\solid.css" rel="stylesheet">

    <!-- update existing v5 CSS to use v6 icons and assets -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\v5-font-face.css" rel="stylesheet">
    <!-- upload styling of dashbord -->
    <link rel="stylesheet" href="CSS/homeStyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/Service.css?v=<?php echo time(); ?>">
    <script src="script/homeScript.js" defer type="module"></script>
    <!-- style -->
    <style>
      main .content {
        background-color: #f1f5f9;
        padding: 16px;
        text-transform: capitalize;
      }
      #request h1,#events h1 {
        font-size : 20px;
      }
      @media (max-width: 767px) {
        aside ul a {
            margin: 0 auto;
        }
      }
    </style>
</head>

<body>


    <!-- <nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <img src="images/logo.png" alt="" srcset="">

        <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="fa fa-home" aria-hidden="true"></i> </a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#requests"> <i class="fa fa-user-circle" aria-hidden="true"></i></i></a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#events"><i class="fas fa-newspaper    "></i></a></li>
        <li class="nav-item"><a class='logout nav-link' S href="logout.php"><i class="fas fa-door-open    "></i></a></li>

    </ul>
</nav> -->
    <aside class="bg-w txt-c pd-three txt-cap">
        <img src="images/logo.png" alt="" srcset="">
        <ul>
            <li>
            <a class="" data-bs-toggle="tab" href="#home"><i class="fa fa-home" aria-hidden="true"></i>
            <span>admine panel</span>
                </a>
            </li>
            <li>
                <a class="" data-bs-toggle="tab" href="#requests"> <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <span>request</span>
                </a>
            </li>
            <li>
                <a class="" data-bs-toggle="tab" href="#events"><i class="fas fa-newspaper"></i>
                    <span>events</span></a>
            </li>
            <li>
                <a href="logout.php"><i class="fa-solid fa-door-closed"></i>Logout</a>
            </li>
        </ul>
    </aside>
    <!-- Tab panes -->
    <main>
    <div class="tab-content">
        <div class="tab-pane container content home active" id="admine panel">
            <h1><?php nomClub($clubId);?></h1>
            <div class="d-flex widgets ">
                <div class="stat-widget shadow">
                    <!-- SELECT sum(valide) FROM `integrer` WHERE idClub = 24 -->
                    <span class="stat-num"><?php membreDeClubes($clubId)?></span>
                    <p> <i class="fa fa-user" aria-hidden="true"></i></p>
                    <p class="nextEventText ">Membres</p>
                </div>
                <div class="stat-widget shadow">
                    <span class="stat-num"><?php nombreDeReq($clubId)?></span>
                    <p><i class="fa fa-user" aria-hidden="true"></i></p>
                    <p class="nextEventText">Requests</p>
                </div>
                <div class="stat-widget shadow nextEvent">
                    <p class="nextEventText "><i class="fa fa-calendar" aria-hidden="true"></i> next event </p>
                    <span class="stat-num date">20-09-2023 </i></span>
                </div>
            </div>
        </div>

        <div class="tab-pane content container fade" id="request">
            <h1>requests d'integration du votre club </h1>
            <div class="requests">
                <?php $role = $_SESSION['user']['role'];Requests($role);?>
            </div>
        </div>
        <div class="tab-pane content container fade" id="events">
            <h1>Evenement proposés par les membres </h1> <br>
            <div class=" d-flex flex-wrap events">
                <?php events($clubId); ?>
            </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script> -->
</body>

</html>