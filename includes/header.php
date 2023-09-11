<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="description" content="">
    <title>Vanguard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/multi-select.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        .btn-social {
            height: 57px;
            width: 57px;
            border-radius: 50%;
        }

        .btn-social img {
            width: 30px;

        }

        .btn-social:hover img {
            filter: invert(100%);

        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-black">
    <div class="container">
        <a class="navbar-brand px-5" href="index">
            <img src="assets/images/logo2.png" style="max-width: 70px; height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-custom mr-auto w-100 justify-content-end">

                <?php
                if (isset($_SESSION['user_type'])) {


                    if ($_SESSION['user_type'] == 1) {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="welcome">Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="next-steps">Next Steps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropbtn" href="trainers-page">Traniers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropbtn" href="training_center">Training Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard">Dashboard</a>
                        </li>
                        <?php
                    }if ($_SESSION['user_type'] == 2) {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="welcome">Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="next-steps">Next Steps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropbtn" href="trainers-page">Traniers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropbtn" href="training_center">Training Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard">Dashboard</a>
                        </li>
                        <?php
                    } else if($_SESSION['user_type']==0 )  {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="welcome">Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="next-steps">Next Steps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard">Dashboard</a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>