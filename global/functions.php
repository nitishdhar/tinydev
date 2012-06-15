<?php
function currPageURL() {
 $pageURL = 'http';
 if (isset($_SERVER['HTTPS']) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

function currPage() {
    $currentPageArray = explode('/', currPageURL());
    return end($currentPageArray);
}

function activeTab($currentTab) {
    $currentPageArray = explode('/', currPageURL());
    $currentPage = end($currentPageArray);
    
    if($currentPage == $currentTab) {
        echo 'class="active"';
    }
}

/*
 * Check if the site is under maintenance, 
 * if it is, redirect to the maintenance page
 * 
 */
function checkMaintenance() {
    if(MAINTENANCE && currPage() != 'maintenance') {
        header('Location: maintenance');
    } else if(!MAINTENANCE && currPage() == 'maintenance') {
        header('Location: home');
    }
}

?>