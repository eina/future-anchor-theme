<?php theme_include('header');?>
    <main>
        <header>
            <h1 class="page-title"><?php echo page_title();?></h1>
        </header>
        <article>
            <div class="wrap">
                <?php echo page_content();?>
            </div>
        </article>
<?php theme_include('footer');?>