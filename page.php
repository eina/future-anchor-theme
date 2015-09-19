<?php theme_include('header');?>
    <!--start the blog page-->
    <main>
        <header>
            <h1 class="page-title"><?php echo page_title();?></h1>
        </header>
        <article>
            <div class="wrap">
                <?php echo page_content(); ?>
            </div>
        </article>
    </main>
<?php theme_include('footer');?>