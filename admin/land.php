<?php

require_once "../classes/class.user.php";
require_once '../components/home-head.php';

?>


    <!--- Body section --->
    <section class="main">
        <?php if(isset($_SESSION['session_id'])): ?>

        <div class="list">
            <div class="box">
                <div class="box-content">
                    <div class="title">
                        <h3>Yarnsh Database</h3>
                    </div>
                    <div class="">
                        <p> <a href="booking">Bookings</a> </p>
                        <p> <a href="view">Views</a> </p>
                        <p> <a href="material/material.php">Student Past questions</a> </p>
                    </div>
                </div>
            </div>   
        </div>
        
    </section>

    <div class="footer">
        <div class="copyright" style="text-align: center; color: #444; font-weight: 600; margin-top: 3rem;">
            Yarnsh &copy; 2022
        </div>
    </div>

    <?php else: ?>
        <p>You are currently not logged in, please <a href="login" style="color: #27ae60; text-decoration: underline!important; font-size: 1.1rem; font-weight: 600;">Login</a></p>

    <?php endif ?>
    <!--- Body section ends --->



<?php

require_once '../components/home-foot.php';

?>