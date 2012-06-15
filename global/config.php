<?php
include_once 'functions.php';
include_once 'define_meta.php';

//Definitions
define('SITE_URL', 'http://starter.local');
define('SITE_NAME', 'Starter Kit');
define('MAINTENANCE', true); //Set true to put the site under maintenance mode

//Pre-Checks
checkMaintenance();
?>
