<?php

require_once "../classes/class.user.php";
require_once '../components/header.php';

$agent = new Agent();

if (isset($_POST['login'])) {
    extract($_POST);

    if ((!empty($email)) && (!empty($password))) {
        $agentExist = $agent->agentExist($email);
        if ((!empty($email)) && $agentExist) {
            $login = $agent->loginAgent($email, trim($password));
            if ($login) {
                # calls sweet alert
                echo "<script type='text/javascript'>";
                echo "setTimeout(function() {
                    swal.fire('Welcome back!', '', 'success');";
                echo "});</script>";
                
                # redirects
                echo "<script type='text/javascript'>";
                echo "setTimeout(function() {
                    window.location.href = 'home';";
                echo "}, 2000);</script>";
            } else {
                $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Wrong password</div>';
            }        
        } else {
            $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Invalid Email</div>';
        }  
    } else {
        $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Fill in your login details</div>';
    }
    
}

?>

    <!-- Main section -->
    <section class="main">
        <div class="form-container">
            <h3>Admin Login</h3>
            <form action="" method="post">

                <?php if(isset($message)) echo $message; ?>

                <span class="span">Email</span>
                <input type="email" name="email" class="box-form">
                <div class="pass" style="position: relative;">
                    <span class="span">Password</span>
                    <input type="password" name="password" class="box-form" id="passCheck">
                    <span style="position: absolute; right: 10px!important; transform: translate(0, 40%)!important; cursor: pointer; font-size: 16px; color: #666; display: inline;"><i class="fas fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></span>
                </div>
                
                <button type="submit" name="login" class="btn">Login</button>

            </form>
        </div>
    </section>

    <div class="footer">
        <div class="copyright" style="text-align: center; color: #27ae60; font-weight: 600; margin-top: 3rem;">
            Yarnsh &copy; 2022
        </div>
    </div>
    <!-- Main section -->

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

<?php

require_once '../components/footer.php';

?>