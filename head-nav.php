<header id="header" class="site-header">
    <div class="wrap">
        <?php if(!is_homepage()):?>
            <h1 class="site-title"><a href="<?php echo base_url();?>" title="Home Page"><?php echo site_name();?></a></h1>
        <?php endif;?>

        <nav role="navigation" class="main-nav">
            <ul>
                <li><a  class="<?php if(is_postspage() ) { echo 'active';}?>" href="<?php echo base_url();?>portfolio">Portfolio</a></li>
                <li><a class="<?php if(page_name() == 'About' ) { echo 'active';}?>" href="<?php echo base_url();?>about">About</a></li>
                <li><a class="<?php if(page_name() == 'Contact' ) { echo 'active';}?>" href="<?php echo base_url();?>contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>