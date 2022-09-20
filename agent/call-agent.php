<?php

require_once "../classes/class.user.php";

$agent = new Agent();

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
    <meta property="og:url" content="https://yarnsh.com/agent/show.php" />
    <meta property="og:image" content="https://assets/img/Yarnshc.jpg" />
    <meta property="og:title" content="Delsu - Oleh Campus" />
    <meta property="og:description" content="Yarnsh is the student hub for searching for hostels/accomodations, booking rides and provides everything that would be necessary for a student survival">
    <!--  Meta tags ends  -->

    <title>Delsu | Oleh Campus</title>
    <!--  Favicon  -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!---  Stylesheets  --->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/all.css">               <!-- Font-awesome -->
    <link rel="stylesheet" href="../assets/css/delta.css">              <!-- Main -->

    <!--- Link for SEO Optimization  --->
    <link rel="canonical" href="https://yarnsh.com/agent/show.php" />

    <!---  Google Meta tags  --->
    <meta name="google-site-verification" content="IB3HDM05aClifhGXjZxIAKhj7gtTP_VC1JxsFuaHypM" />

</head>
<body>
    
    <!---  Header section starts  --->
    <header class="header">
        <!---  Header-1  --->
        <div class="header-1">
            <!---  Site logo  --->
            <a class="logo"> <img src="../assets/img/Yarnshc.jpg" alt="logo" width="150" height="50"> </a>

            <!---  Navigation links  --->
            <div class="nav-item-container">
                <div class="nav-item">
                    <a href="../index">Home</a>
                    <!-- <a href="">Ride</a> -->
                </div>
                <div id="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <!---  Navigation links ends  --->

        </div>

        <!---  Header-2  --->
        <div class="header-2" style="display: none!important">
            <nav class="navbar"></nav>
        </div>
        <!---  Header-2 ends  --->
    </header>
    <!--- Header section ends  --->


    <!--- Body section --->
    <section class="main-body">
        <div class="body-content">
            <div class="list-view">
                <div class="box-view">
                    <div class="image-view" class="img-fluid">
                        <img src="<?php if(isset($_GET['img'])) echo $_GET['img']; ?>" style="border-radius: 50%; padding: .5rem; margin-top: 3rem;" width="100" height="100" alt="">
                    </div>
                    <?php if(isset($_GET['no'])) $num = substr($_GET['no'], 1, 10);  ?>
                    <div class="content-view">
                        <a>Agent <span style="font-weight: 600;"><?php if(isset($_GET['name'])) echo $_GET['name']; ?></span></a>
                        <a href="tel:+234<?php echo $num; ?>"><i class="fas fa-phone"></i> <?php if(isset($_GET['no'])) echo $_GET['no']; ?></a>
                        <a href="sms:+234<?php echo $num; ?>"><i class="fas fa-sms"> </i> <?php if(isset($_GET['no'])) echo $_GET['no']; ?></a>
                        <a href="https://wa.me/234<?php echo $num; ?>"><i class="fab fa-whatsapp"></i> <?php if(isset($_GET['no'])) echo $_GET['no']; ?></a>
                    </div>
                </div>
            </div>    
        </div>
        <div class="footer">
            <div class="copyright" style="text-align: center; color: #27ae60; font-weight: 600; margin-top: 3rem;">
                Yarnsh &copy; 2022
            </div>
        </div>
    </section>
    <!--- Body section ends --->


    <!---  JavaScripts  --->
    <script src="../assets/js/jquery.min.js"></script>        <!---  jQuery  --->
    <script src="../assets/js/bootstrap.min.js"></script>      <!---  Bootstrap  --->
    <script src="../assets/js/all.js"></script>                <!---  Font-awesome  --->
    <script src="../assets/js/delta.js"></script>               <!---  Main script  --->
    
</body>
</html>