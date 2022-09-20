<?php

require_once "../classes/class.user.php";
require_once '../components/home-head-2.php';

$agent = new Admin();

$result = $agent->getTotalViews();

?>

    <!--- Main section  --->
    <section class="main">

        <?php if(isset($_SESSION['session_id'])): ?>

        <!-- sub-heading -->
        <div class="row align-items-center container my-3 mx-auto" style="padding: .5rem;">
          <h1 class="text-center">Views</h1>
            <div class="container mt-5">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 m-auto table-responsive">
                  <table class="table table-bordered table-hovered table-striped" id="vacancyTable" style="margin-top: 1rem;">
                    <thead>
                      <th> Views </th>
                    </thead>

                    <tbody>

                      <?php if($result !== null) { foreach($result as $results): ?>

                        <tr>
                          <td> <?php echo $results['visits']; ?> </td>
                        </tr>


                        <?php endforeach;} else{ echo ''; exit; } ?>

                    </tbody>	
                  </table>
                </div>
              </div>
            </div> 

        <div class="footer">
            <div class="copyright" style="text-align: center; color: #27ae60; font-weight: 600; margin-top: 3rem;">
                Yarnsh &copy; 2022
            </div>
        </div>

        <?php else: ?>

            <p>You are currently not logged in, please <a href="login" style="color: #27ae60; text-decoration: underline!important; font-size: 1.1rem; font-weight: 600;">Login</a></p>

        <?php endif ?>

    </section>
    <!--- Main section ends  --->


<!---  JavaScripts  --->
<script src="../assets/js/jquery.min.js"></script>       <!---  jQuery  --->
<script src="../assets/js/jquery.dataTables.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>     <!---  Bootstrap  --->
<script src="../assets/js/all.js"></script>               <!---  Font-awesome  --->
<script src="../assets/js/register.js"></script>          <!---  Main script  --->

<script>

    $(document).ready(function() {
      $('#vacancyTable').DataTable();
    });

</script>

</body>
</html>