<?php

require_once "../classes/class.user.php";
require_once '../components/home-head.php';

$agent = new Agent();

if (isset($_POST['done'])) {
    extract($_POST);
    isset($_FILES['image']['name']) ? $image = $_FILES['image']['name'] : $image = null;
    $validateImage = $agent->validateImage($image);
    $uploadImage = $agent->uploadImage($_FILES['image']['tmp_name']);
    if ($validateImage) {
        $insertImage = $agent->InsertImage($uploadImage, $user_id);
        if ($uploadImage && $insertImage) {
            //call sweet alert
            echo "<script type='text/javascript'>";
            echo "setTimeout(function() {
                Swal.fire('Agent profile added sucessfully!', '', 'success');";
            echo "});</script>";

            //redirect back to profile page after update
            echo "<script type='text/javascript'>";
            echo "setTimeout(function() {
                window.location.href = 'vacancy';";
            echo "}, 2000);</script>";
        } else {
            $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Sorry, we encountered an error, contact the admin</div>';
        } 
    } else {
        $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Image file type not allowed</div>';
    }
}

?>

    <!--- Main section  --->
    <section class="main">

        <?php if(isset($_SESSION['session_id'])): ?>

        <style>
            label {
                font-weight: 600;
                margin-top: .4rem;
            }
        </style>

        <!--- Add vacancy  --->
        <div class="box-1">
            <h5 style="margin: 1rem; font-weight: 650; text-align: center;">Post vacancy</h5>
                <form action="" method="post" enctype="multipart/form-data">

                    <?php if(isset($message)) echo $message; ?>

                    <div class="content">
                        <label for="file">Picture of agent</label>
                        <input type="file" name="image" style="display: block;">
                    </div>
                    <input type="hidden" name="user_id" value="<?php if(isset($_GET['id'])) echo $_GET['id']; ?>">

                    <button type="submit" name="done" class="btn-2" style="width: 100%;">Add Profile</button>
                    <a href="vacancy" class="btn-2" style="width: fit-content;">Go back</a>

                </form>
    
        </div>
        <!--- Add vacancy  --->

        <div class="footer">
            <div class="copyright" style="text-align: center; color: #27ae60; font-weight: 600; margin-top: 3rem;">
                Yarnsh &copy; 2022
            </div>
        </div>

        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>

        <?php else: ?>

            <p>You are currently not logged in, please <a href="login" style="color: #27ae60; text-decoration: underline!important; font-size: 1.1rem; font-weight: 600;">Login</a></p>

        <?php endif ?>

    </section>
    <!--- Main section ends  --->


<?php

require_once '../components/home-foot.php';

?>