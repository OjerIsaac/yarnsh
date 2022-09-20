<?php

require_once "../classes/class.user.php";
require_once '../components/home-head-2.php';

$agent = new Agent();

if(isset($_GET['id'])) $user_id = $_GET['id'];

$delete = $agent->removeVacancy($user_id);

if ($delete) {
    echo "<script type='text/javascript'>";
    echo "setTimeout(function() {
        Swal.fire('Vacancy deleted Successfully!', '', 'success');";
    echo "});</script>";

    echo "<script type='text/javascript'>";
    echo "setTimeout(function() {
        window.location.href = 'vacancy';";
    echo "}, 2000);</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "setTimeout(function() {
        Swal.fire('An error occured!', '', 'error');";
    echo "});</script>";

    echo "<script type='text/javascript'>";
    echo "setTimeout(function() {
        window.location.href = 'vacancy';";
    echo "}, 2000);</script>";
}
