<?php
function title() {
    $currentPage = currPage();
    switch($currentPage) {
        case '': echo 'Home | Welcome to Tiny Dev Kit'; break;
        case 'home': echo 'Home | Welcome to Tiny Dev Kit'; break;
        case 'about': echo 'About | Welcome to Tiny Dev Kit'; break;
        default : echo 'Welcome to Tiny Dev Kit'; break;
    }
}

function description() {
    $currentPage = currPage();
    switch($currentPage) {
        case '': echo 'your awesome description here..'; break;
        case 'home': echo 'your awesome description here..'; break;
        case 'about': echo 'your awesome description here..'; break;
        default : echo 'your awesome description here..'; break;
    }
}


function keywords() {
    $currentPage = currPage();
    switch($currentPage) {
        case '': echo 'clous services, web development'; break;
        case 'home': echo 'clous services, web development'; break;
        case 'about': echo 'clous services, web development'; break;
        default : echo 'clous services, web development'; break;
    }
}
?>
