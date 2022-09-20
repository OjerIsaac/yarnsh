<?php

require_once "../classes/class.user.php";

// $user = new User();

unset($_SESSION['email']);
unset($_SESSION['id']);

session_destroy();
header('location: login');
