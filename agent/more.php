<?php

require_once "../classes/class.user.php";

$agent = new Agent();

$id = $_POST['last_file_id'];
$result = $agent->getPostedVacancy_2($id);

?>

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
        <a href="agent-page.php?name=<?php echo $results['agent_name']; ?>&no=<?php echo $results['agent_number']; ?>&img=<?php  ?>"> <button class="vacant-card-btn">View Details</button></a>
    </div>
</div>

<?php endforeach;} else{ echo ''; exit; } ?>
    
<div id="more_new"></div>
<div id="more">
<?php #echo $results['id']; ?>
    <a href="javascript:void(0)" id="<?php echo $results['id']; ?>" class="show-more"> <button class="btn">View More</button></a>
</div>
