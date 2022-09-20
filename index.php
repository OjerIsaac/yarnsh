<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="Yarnsh is a community of student built by students for students" />
    <meta name="keyword" content="pdf materials, course work" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yarnsh.com/" />
    <meta property="og:image" content="https://assets/img/Yarnshc.jpg" />
    <meta property="og:title" content="Home | Yarnsh" />
    <meta property="og:description" content="Yarnsh is a community of student built by students for students" />
    <meta name="twitter:card" content="https://assets/img/Yarnshc.jpg" />
    <!--  Meta tags ends  -->

    <title>Home | Yarnsh</title>
    <!--  Favicon  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!---  Stylesheets  --->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/all.css" />
    <!-- Font-awesome -->
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Main -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"  />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/63dcbbda9c.js" crossorigin="anonymous"></script>

    <!--- Link for SEO Optimization  --->
    <link rel="canonical" href="https://yarnsh.com/index/" />

    <!---  Google Meta tags  --->
    <meta name="google-site-verification" content="IB3HDM05aClifhGXjZxIAKhj7gtTP_VC1JxsFuaHypM" />
  </head>

  <body>
    <!---  wrapper  --->
    <div class="wraper">
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
                  <button><a href=""> HOME</a></button>
                </li>

                <li class="desktop-link">
                  <button class="get-a-ride-btn">
                    <a href="javascript:void(0)"> GET A RIDE </a>
                  </button>
                </li>
                <li class="desktop-link">
                  <button>
                    <a href="vacancy">FIND HOSTEL </a>
                  </button>
                </li>
                <li class="desktop-link">
                  <button><a href=""> LIBARY</a></button>
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
                <button><a href=""> HOME</a></button>
              </li>
              <li class="mobile-link">
                <button class="get-a-ride-btn"><a href="javascript:void(0)"> GET A RIDE </a></button>
              </li>
              <li class="mobile-link">
                <button><a href="vacancy">FIND HOSTEL </a></button>
              </li>
              <li class="mobile-link">
                <button><a href=""> LIBARY</a></button>
              </li>
              <li class="mobile-link">
                <button><a href=""> STUDENT SERVICE</a></button>
              </li>
            </ul>
          </div>
        </header>
        <!-- mobile navigation button -->
        <button class="menu-btn">MENU <i class="fa-solid fa-bars"></i></button>
        <!-- alert -->
        <div class="coming-soon-pop-up">
          <div>
            <button class="close-pop-btn"><i class="fa fa-times"></i></button>
            <p>Work in progress...Be a part of us! Thank you.</p>
          </div>
        </div>

        <!-- main body -->
        <section class="section-1">
          <div class="hero">
            <img src="assets/img/students.png" alt="" />
            <div class="hero-discription">
              <h1>School Life Made Easy</h1>
              <h3>
                A community of students, built by students for students, that
                offer you the priviledge to achieve mind blowing stuff while
                schooling.
              </h3>
            </div>
          </div>
          <!-- <div class="sign-container">
            <button id="sign-up-btn">
              <a class="action" href="a/register.php">REGISTER</a>
            </button>
            <button class="login-btn">
              <a class="action" href="a/login.php">LOGIN</a>
            </button>
          </div> -->
        </section>
        <section class="offer">
          <h3 class="section-heading"><span>WHAT WE DO</span></h3>
          <div class="offer-container">
            <div class="offer-card">
              <img src="assets/img/h1.png" alt="" />
              <div class="offer-discription">
                <p>
                  We at yarnsh.com assist old & incoming student search for hostel
                  at ease.
                </p>
                <button onclick="redirect()">
                  <a href="vacancy">FIND HOSTEL</a>
                </button>
              </div>
            </div>
            <div class="offer-card">
              <img src="assets/img/keke.png" alt="" />
              <div class="offer-discription">
                <p>
                  Creating an avenue that student can access to transportation
                  facilities in and around campus
                </p>
                <button class="get-a-ride-btn">
                  <a href="javascript:void(0)"> GET A RIDE </a>
                  <!-- onclick="redirect()" -->
                </button>
              </div>
            </div>
          </div>
          <section class="form-section">
            <div class="pop-out-forms">
              <form class="get-ride-form" action="order" method="post" id="form">
                <button class="close-get-a-ride-form-btn">
                  <i class="fa fa-times"></i>
                </button>
                <p>All input field are required</p>
                <div class="form-control">
                  <label for="">Pickup</label>
                  <input type="text" name="pickup" required />
                </div>
                <div class="form-control">
                  <label for="">Destination</label>
                  <input type="text" name="destination" required />
                </div>
                <div class="form-control">
                  <input id="get-ride-submit-btn" name="order" class="action" type="submit" value="Book Now" />
                </div>
              </form>
            </div>
          </section>
        </section>
        <section class="section-2">
          <h3 class="section-heading">
            <span class="coming-soon">COMING SOON!</span>
          </h3>
          <div class="features">
            <div class="feature-item">
              <img
                src="assets/img/screenshoot.png"
                alt=""
                class="feature-image"
              />
              <!--   <h4>FIND HOSTELS</h4> -->
              <h4>STUDY MATERIALS</h4>
              <a class="explore-btn">EXPLORE</a>
              <img src="./assets/img/key.jpeg" class="key-image" alt="Locked" />
            </div>
            <div class="feature-item">
              <img src="assets/img/students-2.png" class="feature-image" />
              <h4>STUDENT SERVICE</h4>
              <a class="explore-btn">EXPLORE</a>
              <img src="./assets/img/key.jpeg" alt="Locked" class="key-image" />
            </div>
          </div>
        </section>

        <!-- footer -->
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
    </div>
    <!--- wrapper  --->

    <!---  JavaScripts  --->

    <script src="assets/js/jquery.min.js"></script>
    <!---  jQuery  --->
    <script src="assets/js/bootstrap.min.js"></script>
    <!---  Bootstrap  --->
    <script src="assets/js/all.js"></script>
    <!---  Font-awesome  --->
    <!---  Main script  --->
    <script src="assets/js/header.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // function redirect() {
      //   window.location.href = "agent/hostels";
      // }

      // document.querySelector('#form').addEventListener('submit', () => {
      //   document.querySelector('.action').innerText = "Processing...";
      // });

      window.addEventListener('load', function() { 
        //console.log('hello!');
        $.ajax({
          url: 'count',
          type: 'post',
          success: function(data){
            // Perform operation on return value
            //console.log('g');
            //window.location = 'home';
          }
        });
      }, false);
    </script>
  </body>
</html>
