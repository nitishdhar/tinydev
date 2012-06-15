<?php
function title() {
    $currentPage = curPage();
    switch($currentPage) {
        case '': echo 'Home | Welcome to Chanan'; break;
        case 'home': echo 'Home | Welcome to Chanan'; break;
        case 'about': echo 'About | Welcome to Chanan'; break;
        default : echo 'Welcome to Chanan'; break;
    }
}

function description() {
    $currentPage = curPage();
    switch($currentPage) {
        case '': echo 'your awesome description here..'; break;
        case 'home': echo 'your awesome description here..'; break;
        case 'about': echo 'your awesome description here..'; break;
        default : echo 'your awesome description here..'; break;
    }
}


function keywords() {
    $currentPage = curPage();
    switch($currentPage) {
        case '': echo 'clous services, web development'; break;
        case 'home': echo 'clous services, web development'; break;
        case 'about': echo 'clous services, web development'; break;
        default : echo 'clous services, web development'; break;
    }
}
?>
