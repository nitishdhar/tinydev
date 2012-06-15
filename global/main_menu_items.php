<ul class="nav">
    <li <?php activeTab('home'); activeTab(''); ?> class="first"><a href="<?php echo SITE_URL; ?>/home">Home</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Sub Menu 1</a></li>
            <li><a href="#">Sub Menu 2</a></li>
        </ul>
    </li>
    <li <?php activeTab('about'); ?>><a href="<?php echo SITE_URL; ?>/about">About Us</a></li>
</ul>