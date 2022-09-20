<?php

require_once "classes/class.user.php";

$rider = new Ride();

extract($_POST);

if (isset($_POST['book'])) {
    extract($_POST); #print_r($_POST); exit;

    $booking_id = time();

    $newBooking = $rider->newBook($pickup, $destination, $name, $number, $booking_id, $date);

    if ($newBooking) {
        // $message = "<div class='alert alert-success' style='width: fit-content; margin: auto;'>Your ride has been booked successfuly!</div>";
        header('location: ticket?id='.$booking_id.'&name='.$name.'&start='.$pickup.'&end='.$destination.'');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Meta tags  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Yarnsh is a community of student built by students for students">
    <meta name="keyword" content="pdf materials, course work">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yarnsh.com/terms" />
    <meta property="og:image" content="https://assets/img/Yarnshc.jpg" />
    <meta property="og:title" content="Terms - Yarnsh" />
    <meta name="description" content="Yarnsh is a community of student built by students for students">
    <meta name="twitter:card" content="https://assets/img/Yarnshc.jpg">
    <!--  Meta tags ends  -->

    <title>Order Ride | Yarnsh</title>
    <!--  Favicon  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <script src="assets/js/sweetalert2.min.js"></script>
    <!---  Stylesheets  --->
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/all.css"> <!-- Font-awesome -->
    <link rel="stylesheet" href="assets/css/terms&privacy.css"> <!-- Main -->

    <!--- Link for SEO Optimization  --->
    <link rel="canonical" href="https://yarnsh.com/terms/" />

    <!---  Google Meta tags  --->
    <meta name="google-site-verification" content="IB3HDM05aClifhGXjZxIAKhj7gtTP_VC1JxsFuaHypM" />

</head>
<body>
    <!---  Header section starts  --->
    <header class="header">
        <div class="header-1">
            <!---  Site logo  --->
            <a class="logo"> <img src="assets/img/Yarn.jpg" alt="logo" width="150" height="50">
            </a>
        </div>
    </header>
    <!--- Header section ends  --->

    <!--- Body  --->
    <section class="main">
        <div class="sub">
            <h4>Complete your ride order</h4>

            <?php if(isset($message)) echo $message; ?>

            <p style="margin-top: 1rem; font-size: .9rem; font-weight: 400; line-height: 2;">
                Pickup locations: <span style="color: #219150; font-weight: 500;">Law faculty gate</span> & <span style="color: #219150; font-weight: 500;">Engineering gate</span>.
            </p>

            <p style="margin-top: 1rem; font-size: .9rem; font-weight: 400; line-height: 2;">
                Destination locations: <span style="color: #219150; font-weight: 500;">Warri park</span> & <span style="color: #219150; font-weight: 500;">Ozoro</span>.
            </p>

            <form action="" method="post">
                <div class="form-control">
                    <label for="">Pickup</label>
                    <input type="text" name="pickup" value="<?php if(isset($pickup)) { echo $pickup; } else { header('location: home'); } ?>" required />
                </div>

                <div class="form-control">
                    <label for="">Destination</label>
                    <input type="text" name="destination" value="<?php if(isset($destination)) { echo $destination; } else { header('location: home'); } ?>" required />
                </div>

                <div class="form-control">
                    <label for="">Date</label>
                    <input type="datetime-local" name="date" required />
                </div>

                <div class="form-control">
                    <label for="">Name</label>
                    <input type="text" name="name" required />
                </div>

                <div class="form-control">
                    <label for="">Phone Number</label>
                    <input type="tel" name="number" maxlength="11" required />
                </div>

                <div class="form-control">
                  <button class="btn" name="book" type="submit">Book Now</button>
                </div>
            </form>

            
        </div>
    </section>
    <!--- Body ends  --->

    <!---  JavaScripts  --->
    <script src="assets/js/jquery.min.js"></script>        <!---  jQuery  --->
    <script src="assets/js/bootstrap.min.js"></script>     <!---  Bootstrap  --->
    <script src="assets/js/all.js"></script>               <!---  Font-awesome  --->
    <script src="assets/js/register.js"></script>          <!---  Main script  --->

    <script>
        history.replaceState("", "", "order");
    </script>

</body>
</html>