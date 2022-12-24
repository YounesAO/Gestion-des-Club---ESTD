<?php
session_start();
require 'dbConnect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de Service Parascolaire</title>
    <link rel="stylesheet" href="CSS/homeStyle.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Service.css?v=<?php echo time(); ?>">
    <!-- Loading the v6 core styles and the Solid and Brands styles -->
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\fontawesome.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\brands.css" rel="stylesheet">
    <link href="fontawsome\fontawesome-free-6.2.1-web\css\solid.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">
    <!-- update existing v5 CSS to use v6 icons and assets -->

    <link href="fontawsome\fontawesome-free-6.2.1-web\css\v5-font-face.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Homenaje&display=swap');
    </style>
    <script src="script/homeScript.js" defer type="module"></script>
</head>

<body>

        <!-- <ul class="nav nav-tabs">
        <li class="nav-item">
        <img src="images/logo.png" alt="" srcset="">

        <a class="nav-link active" data-bs-toggle="tab" href="#Dashboard"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#clubs"> <i class="fa fa-user-circle" aria-hidden="true"></i> clubs requests</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#events"><i class="fas fa-newspaper    "></i> events</a></li>
        <li class="nav-item"><a class='logout nav-link' S href="logout.php"><i class="fas fa-door-open    "></i></a></li>

    </ul> -->
        <aside class="bg-w txt-c pd-three txt-cap">
            <img src="images/logo.png" alt="" srcset="">
            <ul>
                <li>
                    <a data-bs-toggle="tab" href="#Dashboard"> <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a data-bs-toggle="tab" href="#request"><i class="fa-solid fa-users"></i>
                        <span>request</span>
                    </a>
                </li>
                <li>
                    <a data-bs-toggle="tab" href="#events"><i class="fa-solid fa-square-plus"></i>
                        <span>events</span></a>
                </li>
            </ul>
        </aside>

    <!-- Tab panes -->
    <main>
        <div class="tab-content">
            <div class="tab-pane content first home active" id="dashboard">
                <h1>dashboard</h1>
                <div class="d-flex widgets ">
                    <div class="stat-widget shadow">
                        <span class="stat-num">9 </span>
                        <span class="stat-text"> Club</span>
                    </div>
                    <div class="stat-widget shadow">
                        <span class="stat-num"> 120 </span>
                        <span class="stat-text"><i class="fa fa-user" aria-hidden="true"></i>Etudiants</span>
                    </div>
                    <div class="stat-widget shadow">
                        <span class="stat-num date">20-09-2023 </i></span>
                        <span class="stat-text"><i class="fa fa-calendar" aria-hidden="true"></i> next event </span>
                    </div>
                    <div class="stat-widget shadow" id="chartClub">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="stat-widget shadow" id="chartmem">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>

            <div class="tab-pane content fade" id="request">
                <h1>requests</h1>
                <div class="card">
                    <img class="card-img-top" src="images\img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <div>
                            <a href="#" class="btn btn-primary">Accepter</a>
                            <a href="#" class="btn btn-danger">Refuser</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane content fade" id="events">
                <h1>events</h1>

                <div class="card">
                    <img class="card-img-top" src="images\logo1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Event</h4>
                        <p class="card-text">Proposer par username</p>
                        <div>
                            <a href="#" class="btn btn-primary">Valider</a>
                            <a href="#" class="btn btn-danger">Refuser</a>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HIGH TECH', 'ESTD MEDIA', 'GEN Z', 'United student'],
            datasets: [{
                label: 'Membres par clubs',
                data: [12, 19, 3, 5],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    const ctx1 = document.getElementById('myChart1');

    data1 = {
        datasets: [{
            data: [10, 30]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Female',
            'Male'
        ]
    };


    const config1 = {
        type: 'doughnut',
        data: data1,
    };
    new Chart(ctx1, config1);
    </script>

</body>
</script>

</html>