<?php theme_include('header');?>
    <main>
        <header>
            <h1 class="page-title animated slideInDown"><?php echo page_title();?></h1>
        </header>
        <article>
            <div class="wrap">
                <div class="page-content">
                    <?php echo page_content();?>
                </div>
                <div class="my-status">
                    <?php show_page_extra();?>

                </div>
            </div>
        </article>
<?php theme_include('footer');?>