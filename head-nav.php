<header id="header" class="site-header">
    <div class="wrap">

        <?php //if(!is_homepage()):?>
            <h1 class="site-title"><a href="<?php echo base_url();?>" title="Home Page"><span class="initials">EO</span><span class="fullname"><?php echo site_name();?></span></a></h1>
        <?php //endif;?>

        <nav role="navigation" class="main-nav">
            <ul>
                <li class="mnav" id="menu-button"><a href="#">MENU</a></li>
                <li class="nav__portfolio"><a <?php if(is_postspage() ) { echo 'class="active';}?>" href="<?php echo base_url();?>portfolio">Portfolio</a></li>
                <li class="nav__about"><a <?php if(page_name() == 'About' ) { echo 'class="active"';}?>" href="<?php echo base_url();?>about">About</a></li>
                <li class="nav__contact"><a <?php if(page_name() == 'Contact' ) { echo 'class="active"';}?>" href="<?php echo base_url();?>contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <nav role="navigation" class="mobile-nav" id="mobile-nav">
        <ul>
            <li class="nav__portfolio"><a <?php if(is_postspage() ) { echo 'class="active';}?>" href="<?php echo base_url();?>portfolio#content">Portfolio</a></li>
            <li class="nav__about"><a <?php if(page_name() == 'About' ) { echo 'class="active"';}?>" href="<?php echo base_url();?>about">About</a></li>
            <li class="nav__contact"><a <?php if(page_name() == 'Contact' ) { echo 'class="active"';}?>" href="<?php echo base_url();?>contact">Contact</a></li>
        </ul>
    </nav>
</header>
