<?php

require_once "../classes/class.user.php";
require_once '../components/home-head.php';

$agent = new Agent();

if (isset($_POST['done'])) {
    extract($_POST);
    // isset($_FILES['image']['name']) ? $image = $_FILES['image']['name'] : $image = null;
    // $validateImage = $agent->validateImage($image);
    // $uploadImage = $agent->uploadImage($_FILES['image']['tmp_name']);
    #if ($validateImage && $uploadImage) {
        $upload = $agent->newVacancy($location, $area, str_replace(array(',', 'k', 'K'), '', $price), $type, $rent, $address, $description, $ag_name, $ag_phone, $_SESSION['id']);
        if ($upload) {
            //call sweet alert
            echo "<script type='text/javascript'>";
            echo "setTimeout(function() {
                Swal.fire('Vacancy Posted Successfully!', '', 'success');";
            echo "});</script>";

            //redirect back to profile page after update
            echo "<script type='text/javascript'>";
            echo "setTimeout(function() {
                window.location.href = 'vacancy';";
            echo "}, 2000);</script>";
        } else {
            $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Sorry, we encountered an error, contact the admin</div>';
        } 
    // } else {
    //     $message = '<div style="color: #dc3545; text-align: center; margin: auto;">Image file type not allowed</div>';
    // }
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

                    <!--- location  --->
                    <div class="content">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="field" required>
                    </div>
                    <!--- area  --->
                    <div class="content">
                        <label for="area">Area</label>
                        <input type="text" name="area" class="field" required>
                    </div>
                    <!--- price  --->
                    <div class="content">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="field" required>
                    </div>
                    <!--- property type  --->
                    <div class="content">
                        <label for="type">House type</label>
                        <input type="text" name="type" class="field" required>
                    </div>
                    <!--- rent  --->
                    <div class="content">
                        <label for="rent">Rent</label>
                        <input type="text" name="rent" value="rent" class="field" required readonly>
                    </div>
                    <!--- full address  --->
                    <div class="content">
                        <label for="address">Full address <span style="font-size: .7rem; color: #27ae60;">(besides the mango tree, etc)</span></label>
                        <input type="text" name="address" class="field" required>
                    </div>
                    <!--- full description  --->
                    <div class="content">
                        <label for="description">House amenities <span style="font-size: .7rem; color: #27ae60;">(shower, wardrobe, etc)</span></label>
                        <input type="text" name="description" class="field" required>
                    </div>
                    <!--- Agent  --->
                    <h5 style="margin-top: 1rem;">Optional</h5>
                    <div class="content">
                        <label for="ag_name">Agent name in charge</label>
                        <input type="text" name="ag_name" class="field" required>
                    </div>
                    <div class="content">
                        <label for="ag_number">Agent phone number <span style="font-size: .7rem; color: #27ae60;">Whatsapp number</span></label>
                        <input type="text" name="ag_phone" class="field" required>
                    </div>
                    <!-- <div class="content">
                        <label for="file">Picture of agent</label>
                        <input type="file" name="image" style="display: block;">
                    </div> -->

                    <button type="submit" name="done" class="btn-2" style="width: 100%;">Post Vacancy</button>
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