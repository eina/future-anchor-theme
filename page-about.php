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
                <?php show_extra('div', 'my-status');?>
            </div>
        </article>
<?php theme_include('footer');?>