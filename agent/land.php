<?php

require_once "../classes/class.user.php";
require_once '../components/home-head.php';

?>



    <section class="main">

        <?php if(isset($_SESSION['session_id'])): ?>

            <style>
                .box-1 {
                    border: var(--border);
                    box-shadow: var(--box-shadow);
                    border-radius: .5rem;
                    overflow: hidden;
                    background: #fff;
                    text-align: left;
                    padding: 2rem;
                    margin-bottom: 2rem!important;
                }
                .box-1 p {
                    margin: 0; padding: .4rem;
                }
            </style>

            <!-- Welcome -->
            <div class="box-1" style="padding: 1rem;">
                <p style="font-size: 1.2rem; font-weight: 650;">Welcome back <?php #if(isset($_SESSION['email'])) echo $_SESSION['full_name']; ?> &#128075; </p>
                <p style="text-align: right; font-weight: 300;"><a href="https://wa.me/2349050217462" style="font-weight: 300; color: #444;"> Tell us how you feel today  <i class="fab fa-whatsapp" style="font-size: 1.3rem; font-weight: 800; color: #27ae60;"></i></a></p>
            </div>

            <!-- send us a token -->
            <div class="box-1" style="padding: .5rem 1rem;">
                <h4 style="text-align: right;"> <a href="https://paystack.com/pay/yarnsh" style="font-size: 1.2rem; text-align: right; color: #27ae60; font-weight: 650;">Send us a token <i class="fas fa-coins" style="color: #27ae60; font-size: 1.5rem;"></i></a> </h4>
                <p style="font-weight: 300;">We know we've helped you transact business...and made you happy &#128522;</p>
                <p style="text-align: right; font-weight: 700;">Keep the community alive <a href="https://paystack.com/pay/yarnsh" style="font-size: .9rem; background: var(--green); color: #fff; padding-top: .1rem; padding-bottom: .2rem; padding-right: .5rem; padding-left: .5rem; border-radius: 8px; font-weight: 600;">Support</a></p>
            </div>

            <!-- vacancy upload -->
            <div class="box-1" style="padding: .5rem 1rem;">
                <h4 style="text-align: right;"><a href="vacancy" style="color: #27ae60; font-weight: 650; font-size: 1.2rem;">Post a vacancy <i class="fas fa-plus" style="color: #27ae60; font-size: 1.5rem;"></i></a></h4>
                <p style="font-weight: 300;">You found a vacancy? &#128248; </p>
                <p style="text-align: right; font-weight: 700;">Share with the community <a href="vacancy" style="font-size: .9rem; background: var(--green); color: #fff; padding-top: .1rem; padding-bottom: .2rem; padding-right: .5rem; padding-left: .5rem; border-radius: 8px; font-weight: 600;">Upload</a></p>
            </div>

            <div class="footer">
                <div class="copyright" style="text-align: center; color: #27ae60; font-weight: 600;">
                    Yarnsh &copy; 2022
                </div>
            </div>
        
        <?php else: ?>
            <p>You are currently not logged in, please <a href="login" style="color: #27ae60; text-decoration: underline!important; font-size: 1.1rem; font-weight: 600;">Login</a></p>

        <?php endif ?>

    </section>


<?php

require_once '../components/home-foot.php';

?>
