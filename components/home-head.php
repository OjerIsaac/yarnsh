<?php 

require_once "../classes/class.user.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Meta tags  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Yarnsh is the student hub for searching for hostels/accomodations, booking rides and provides everything a student would need from admission to graduation">
    <meta name="keyword" content="student accomodation, university hostel, ride to school, hostel for rent, find agent, Delsu hostel, Ozoro hostel, Find houses in Abraka, Hostel in oleh, buy and sell used home items">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yarnsh.com/agent/land.php" />
    <meta property="og:image" content="https://assets/img/Yarnshc.jpg" />
    <meta property="og:title" content="Home | Yarnsh" />
    <meta property="og:description" content="Yarnsh is the student hub for searching for hostels/accomodations, booking rides and provides everything that would be necessary for a student survival">
    <!--  Meta tags ends  -->

    <title>Home | Yarnsh</title>
    <!--  Favicon  -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    
    <script src="../assets/js/sweetalert2.min.js"></script>
    <!---  Stylesheets  --->
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/all.css"> <!-- Font-awesome -->
    <link rel="stylesheet" href="../assets/css/home.css"> <!-- Main -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <!--- Link for SEO Optimization  --->
    <link rel="canonical" href="https://yarnsh.com/agent/land.php" />

    <!---  Google Meta tags  --->
    <meta name="google-site-verification" content="IB3HDM05aClifhGXjZxIAKhj7gtTP_VC1JxsFuaHypM" />

</head>

<body>
    <!---  Header section starts  --->
    <header class="header">
        <!---  Header-1  --->
        <div class="header-1">
            <!---  Site logo  --->
            <a class="logo"> <img src="../assets/img/Yarn.jpg" alt="logo" width="150" height="50"> </a>

            <!---  Navigation links  --->
            <div class="nav-item">

                <?php if(!isset($_SESSION['session_id'])): ?>

                <a href="login">Login</a>

                <?php else: ?>

                <a href="logout.php">Logout</a>

                <?php endif ?>
                
            </div>
            <!---  Navigation links ends  --->

        </div>
    </header>
    <!--- Header section ends  --->