<?php

require_once "../classes/class.user.php";
require_once '../components/home-head-2.php';

$agent = new Agent();

$result = $agent->getPostedVacancyAgent($_SESSION['id']);

?>

    <!--- Main section  --->
    <section class="main">

        <?php if(isset($_SESSION['session_id'])): ?>

        <!-- sub-heading -->
        <div class="row align-items-center container my-3 mx-auto" style="padding: .5rem;">
            <h1 class="text-center">Vacancies posted</h1>
            <a href="vacancy-post" style="border-radius: .4rem; width: fit-content; color: #fff; background: #27ae60; cursor: pointer; outline: transparent!important;border: transparent!important; box-shadow: none!important;">New Vacancy</a>
            <a href="../vacancy" style="border-radius: .4rem; width: fit-content; color: #fff; background: #27ae60; cursor: pointer; outline: transparent!important;border: transparent!important; box-shadow: none!important; margin-left: auto;">View Vacancy</a>
            <div class="container mt-5">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 m-auto table-responsive">
                  <table class="table table-bordered table-hovered table-striped" id="vacancyTable" style="margin-top: 1rem;">
                    <thead>
                      <th> Location </th>
                      <th> Area </th>
                      <th> Price </th>
                      <th> Type </th>
                      <th> Address </th>
                      <th> Description </th>
                      <th> Agent </th>
                      <th> Contact </th>
                      <th> Image </th>
                      <th> Date </th>
                      <th> Actions </th>
                    </thead>

                    <tbody>

                        <?php 
                            foreach($result as $results): 
                        ?>

                        <tr>
                          <td> <?php echo $results['location']; ?> </td>
                          <td> <?php echo $results['area']; ?> </td>
                          <td> <?php echo $results['price']; ?> </td>
                          <td> <?php echo $results['type']; ?> </td>
                          <td> <?php echo $results['address']; ?> </td>
                          <td> <?php echo $results['description']; ?> </td>
                          <td> <?php echo $results['agent_name']; ?> </td>
                          <td> <?php echo $results['agent_number']; ?> </td>
                          <td> <img src="<?php echo "../".$results['agent_image']; ?>" width="60" height="60" alt="agent picture"> </td>
                          <td> <?php echo $results['date']; ?> </td>
                          <td> 
                            <?php echo '<a href="delete.php?id='.$results['id'].'" class="btn btn-danger">Delete</a>'; ?>  
                          </td>
                        </tr>


                      <?php endforeach; ?>	
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