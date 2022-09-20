<?php

require_once "classes/class.user.php";

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
    <meta name="description" content="Yarnsh is a community of student built by students for students">
    <meta name="keyword" content="pdf materials, course work">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yarnsh.com/terms" />
    <meta property="og:image" content="https://assets/img/Yarnshc.jpg" />
    <meta property="og:title" content="Terms - Yarnsh" />
    <meta name="description" content="Yarnsh is a community of student built by students for students">
    <meta name="twitter:card" content="https://assets/img/Yarnshc.jpg">

    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/agent-page.css">
    <title>Agent-page</title>
    <!--  Favicon  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
  </head>
  <body>
    <div class="main-container">
      <!-- header -->
      <header>
        <div class="logo-and-desktop-links-container">
          <div class="logo">
            <img src="assets/img/Yarnsh2.jpg" alt="logo" />
          </div>
          <div class="desktop-nav">
            <ul>
              <li class="desktop-link add-Border-bottom">
                <button><a href="home"> HOME</a></button>
              </li>

              <li class="desktop-link">
                <button><a href="order"> GET A RIDE </a></button>
              </li>
              <li class="desktop-link">
                <button><a href="vacancy">FIND HOSTEL </a></button>
              </li>
              <li class="desktop-link">
                <button><a href="javascript:void(0)"> LIBARY</a></button>
              </li>
            </ul>
          </div>
        </div>
        <div class="mobile-nav">
          <button id="close-mobile-nav-btn">
            <i class="fa fa-times"></i>
          </button>
          <ul>
            <li class="mobile-link">
              <button><a href="home"> HOME</a></button>
            </li>
            <li class="mobile-link">
              <button><a href="order"> GET A RIDE </a></button>
            </li>
            <li class="mobile-link">
              <button><a href="vacancy">FIND HOSTEL </a></button>
            </li>
            <li class="mobile-link">
              <button><a href="javascript:void(0)"> LIBARY</a></button>
            </li>
            <li class="mobile-link">
              <button><a href="javascript:void(0)"> STUDENT SERVICE</a></button>
            </li>
          </ul>
        </div>
      </header>
      <!-- mobile navigation button -->
      <button class="menu-btn">MENU <i class="fa-solid fa-bars"></i></button>
     
<main>
  <h3 class="main-heading">contact agent</h3>
  <div class="agents-container">
    <div class="agent-card">
      <div class="agent-info">
        <h3>Agent <span style="color: #219150;"><?php if(isset($_GET['id'])) { $agent_id = $_GET['id']; $count = $agent->getAgentTotalPost($agent_id); } ?> Vacancy</span></h3>
        <img src="<?php if(isset($_GET['img'])) echo $_GET['img']; ?>" alt="agent picture">
        <div>
          <h4> Name:<span><?php if(isset($_GET['name'])) echo $_GET['name']; ?></span></h4>
          <h4> Phone:<span><?php if(isset($_GET['no'])) echo $_GET['no']; ?></span></h4>
        </div>
      </div>
    <!-- <div class="vacancy-discription">
      <h3>vacancies
      </h3>
      <div class="vacancies-list">
        <ol>
          <li>bed</li>
          <li>room</li>
          <li>sef-contain</li>
        </ol>
        <button class="see-more-vacancy-btn">see More</button>
      </div>
        </div>
    </div> -->
  </div>
</main>
      <!-- footer -->
      <footer>
        <div>
          <div class="quick-link">
            <h4>QUICK LINK</h4>
            <ul>
              <li>
                <a href="javascript:void(0)"
                  ><i class="fas fa-arrow-right" style="color: #219150"></i>
                  Student Login</a
                >
              </li>
              <li>
                <a href="terms"
                  ><i class="fas fa-arrow-right" style="color: #219150"></i>
                  Terms</a
                >
              </li>
              <li>
                <a href="privacy"
                  ><i class="fas fa-arrow-right" style="color: #219150"></i>
                  Privacy</a
                >
              </li>
            </ul>
          </div>

                <div class="contact">
            <h4>CONTACT</h4>
            <ul>
              <li>
                <a href=""
                  ><i class="fas fa-map-marker-alt" style="color: #219150"></i>
                  Ufuoma plaza, Oleh, Delta State, Nigeria</a
                >
              </li>
              <li>
                <a href="mailto:support@yarnsh.com"
                  ><i class="fas fa-envelope" style="color: #219150"></i>
                  support@yarnsh.com</a
                >
              </li>
              <li>
                <a href="https://wa.me/2349050217462"
                  ><i class="fab fa-whatsapp" style="color: #219150"></i>
                  09050217462</a
                >
              </li>
              <li>
                <a href="tel:+234-905-021-7462"
                  ><i class="fas fa-phone" style="color: #219150"></i>
                  09050217462</a
                >
              </li>
            </ul>
          </div>

          <div class="more">
            <h4>MORE</h4>
            <ul>
              <li>
                <a href=""
                  ><i class="fas fa-arrow-right" style="color: #219150"></i>
                  About us</a
                >
              </li>
              <li>
                <a href="https://wa.me/2349050217462"
                  ><i class="fas fa-arrow-right" style="color: #219150"></i>
                  Report an issue</a
                >
              </li>
              <li>
                <a href="mailto:jobs@yarnsh.com"
                  ><i class="fas fa-arrow-right" style="color: #219150"></i> Join
                  us</a
                >
              </li>
            </ul>
          </div>
        </div>
        <p class="date">yarnsh.com &copy; <span class="year"></span></p>
      </footer>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <!---  jQuery  --->
    <script src="assets/js/bootstrap.min.js"></script>
    <!---  Bootstrap  --->
    <script src="assets/js/all.js"></script>
    <!---  Font-awesome  --->
    <!---  Main script  --->
    <script src="assets/js/header.js"></script>
    <!-- <script src="assets/js/main.js"> -->
      <script> 
      function redirect() {
        window.location.href = "agent/hostels";
      }
    </script>
  </body>
</html>
