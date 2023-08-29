<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

include_once "../serverside/functions.php";

if (isset($_SESSION['user_id'])) {

} else {
    //header('Location: sign-in');
    ?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
    <?php
    exit();
}

$func = new Functions();
$users1 = $func->getSingleUser($_SESSION['user_id']);
if (!empty($users1)) {
    $user1 = $users1[0];

} else {
    ?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
    <?php
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/site.webmanifest">
    <link rel="mask-icon" href="../assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/slick-theme.css">
    <link rel="stylesheet" href="../../css/slick.css">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index" class="logo d-flex align-items-center">
            <img src="./assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Vanguard Wealth Builder</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                    <!--                    --><?php
                    //                    if ($user1['image_path'] !=""){
                    //                        ?>
                    <!--                        <img src="-->
                    <?php //=$user1['image_path']?><!--" class=" myImage rounded-circle" alt="Profile">-->
                    <!--                        --><?php
                    //                    }else{
                    //                        ?>
                    <!--                        <img src="assets/img/profile-img.jpg" alt="Profile" class="myImage rounded-circle">-->
                    <!--                        --><?php
                    //                    }
                    //                    ?>


                    <span class="d-none d-md-block dropdown-toggle ps-2"><?= $user1['fname'] ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?= $user1['fname'] ?></h6>

                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!-- ======= End Header ======= -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="events">
                <i class="bi bi-menu-button-wide"></i>
                <span>Events</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="teams">
                <i class="bi bi-bar-chart"></i>
                <span>Team</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="next_step">
                <i class="bi bi-bar-chart"></i>
                <span>Next Step</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="users">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="welcome">
                <i class="bi bi-person"></i>
                <span>Welcome Page & Videos</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="new_business_partner">
                <i class="bi bi-person"></i>
                <span>New Business Partner Page Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="trainers_page_setting">
                <i class="bi bi-person"></i>
                <span>Trainers Page Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="all_guest">
                <i class="bi bi-person"></i>
                <span>All Guests</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="request_trainer">
                <i class="bi bi-person"></i>
                <span>All Request Trainers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="business_partners">
                <i class="bi bi-person"></i>
                <span>New Business Partner</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="new_client">
                <i class="bi bi-person"></i>
                <span>All New Family/Client </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard_page-settings">
                <i class="bi bi-person"></i>
                <span>Dashboard Page Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="training_center_settings">
                <i class="bi bi-person"></i>
                <span>Training Center Settings</span>
            </a>
        </li>
    </ul>
</aside>
<!-- End Sidebar-->