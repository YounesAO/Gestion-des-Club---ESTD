<?php
session_start();
require 'dbConnect.php';
function clubReq(){
  require 'dbConnect.php';

  $sql = 'SELECT * FROM creer where idSP is NULL';
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (is_null($row['idClub']) == false) {
            $sql1 = "SELECT cl.idClub,nomClub,Slogan,img FROM club cl,creer c,etudiant e 
                where cl.idClub = c.idClub and e.IdEtudiant = c.IdEtudiant and cl.idClub = ".$row['idClub'].";";
            $result1 = mysqli_query($con, $sql1);
            $club = mysqli_fetch_assoc($result1);
            echo '
            <div class="card m-1" >
                <img class="card-img-top" src="imagesOfUsers/'.$club['img'].'" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">';echo $club['nomClub'];echo'</h4>
                    <p class="card-text">';echo $club['Slogan'];echo'</p>
                    <div>
                    <a href="validation.php?value=true&idsp=1&idclub=';echo $club['idClub'];echo'" class="btn btn-primary">Valider</a>
                    <a href="validation.php?value=false&idsp=1&idclub=';echo $club['idClub'];echo'" class="btn btn-danger">Refuser</a>
                    </div>
                </div>
                </div>';
        }
    } 
    } else {
        echo '0 Requests';
    }
}
function events(){
  require 'dbConnect.php';
  $sqlRe = " select * from evenement   where idEvenement in (select idEvenement from proposer where  valide = 1 );";
  $result1 = mysqli_query($con, $sqlRe);
  
  // Check if the SELECT query was successful
  if (mysqli_num_rows($result1) > 0) {
    // Output the result of the SELECT query
        while($row = mysqli_fetch_assoc($result1)) {

            echo' <div class="card m-1" >
            <img class="card-img-top" src="images\logo1.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">'.$row['nomEvent'].'</h4>
                <p class="card-text">'.$row['descriptionEvent'].' Proposer par username</p>
                <div>
                <a href="approve.php?value=true&eve='.$row['idEvenement'].' " class="btn btn-primary">Valider</a>
                <a href="approve.php?value=false&eve='.$row['idEvenement'].' " class="btn btn-danger">Refuser</a>
                </div>
            </div>
          </div>';
        }

        }else{
          echo'no result';
        }
  
}
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
                <div class="requests">
                  <?php clubReq();?>
                </div>
            </div>
            <div class="tab-pane content fade" id="events">
                <h1>events</h1>
                <div class="requests">
                  <?php events();?>
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
    </body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</script>

</html>