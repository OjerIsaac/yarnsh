<?php

require_once "classes/class.user.php";

$agent = new Agent();

$result = $agent->getPostedVacancy();

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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/css/hostel-vacant-page.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
    <title>Vacancy | Yarnsh</title>
    <!--  Favicon  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--- Link for SEO Optimization  --->
    <link rel="canonical" href="https://yarnsh.com/vacancy/" />

    <!---  Google Meta tags  --->
    <meta name="google-site-verification" content="IB3HDM05aClifhGXjZxIAKhj7gtTP_VC1JxsFuaHypM" />

  </head>
  <body>
    <div class="main-container">
      <header>
        <div class="logo-and-desktop-links-container">
          <div class="logo">
            <img src="assets/img/Yarnsh2.jpg" alt="logo" />
          </div>
          <div class="desktop-nav">
            <ul>
              <li class="desktop-link add-Border-bottom">
                <button><a href="home"> HOME </a></button>
              </li>
              <li class="desktop-link">
                <button  class="get-a-ride-btn"><a href="order"> GET A RIDE </a></button>
              </li>
              <li class="desktop-link">
                <button><a href="vacancy">FIND HOSTEL </a></button>
              </li>
              <li class="desktop-link">
                <button><a href="javascript:void(0)"> LIBARY</a></button>
              </li>
              <!-- <li class="desktop-link">
                <button><a href=""> STUDENT SERVICE</a></button>
              </li> -->
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
              <button class="get-a-ride-btn"><a href="order"> GET A RIDE </a></button>
            </li>
            <li class="mobile-link">
              <button><a href="vacancy">FIND HOSTEL </a></button>
            </li>
            <li class="mobile-link">
              <button><a href="javascript:void(0)"> LIBARY</a></button>
            </li>
            <!-- <li class="mobile-link">
              <button><a href=""> STUDENT SERVICE</a></button>
            </li> -->
          </ul>
        </div>
      </header>

      <!-- mobile navigation button -->
      <button class="menu-btn">MENU <i class="fa-solid fa-bars"></i></button>
      <main>
        <h1><span>Vacancies</span></h1>

        <?php if($result !== null) { foreach($result as $results): ?>

        <div class="vacancies">
          <div class="vacant-card">
            <h2><?php echo $results['type']; ?></h2>
            <p class="vacant-card-label">location</p>
            <p><?php echo $results['location']; ?></p>
            <p class="vacant-card-label">price</p>
            <h4><span> &#x20A6;<?php echo $results['price']; ?></span></h4>
            <?php #echo $results['id']; ?>
            <p class="vacant-card-posted">
              posted <span>30 june 2022 12:04pm</span>
            </p>
           <a href="agent-page.php?name=<?php echo $results['agent_name']; ?>&no=<?php echo $results['agent_number']; ?>&img=<?php echo $results['agent_image']; ?>&id=<?php echo $results['agent_id']; ?>"> <button class="vacant-card-btn">View Details</button></a>
          </div>
        </div>

        <?php endforeach;} else{ echo 'g'; exit; } ?>
        
        <div id="more_new"></div>
        <div id="more">
        <?php #echo $results['id']; ?>
          <a href="javascript:void(0)" id="<?php echo $results['id']; ?>" class="show-more"> <button class="btn">View More</button></a>
        </div>

      </main>
      <footer>
          <div>
            <div class="quick-link">
              <h4>QUICK LINK</h4>
              <ul style="padding-left: 0;">
                <li>
                  <a href=""
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
              <ul style="padding-left: 0;">
                <li>
                  <a href=""
                    ><i
                      class="fas fa-map-marker-alt"
                      style="color: #219150"
                    ></i>
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
              <ul style="padding-left: 0;">
                <li>
                  <a href="about"
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
                    ><i class="fas fa-arrow-right" style="color: #219150"></i
                    > Join us</a
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
    <!-- <script src="assets/js/main.js"></script> -->

    <script>
      $(document).on('click', '.show-more', function() {
          var last_file_id = $(this).attr('id');
          $('.show-more').html("Loading...");
          $.ajax({
              type: "post",
              url: "agent/more.php",
              data: {
                  last_file_id : last_file_id
              },
              dataType: "text",
              success: function(data) {
                  if (data != "") {
                      $('#more').remove();
                      $('#more_new').append(data);
                  }else {
                      $('.show-more').html('No result');
                  }
              }
          });
      });
    </script>

  </body>
</html>
