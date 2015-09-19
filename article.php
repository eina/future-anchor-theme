<?php theme_include('header');
$imgSlug = article_custom_field('img-slug');?>
    <!--start the blog page-->
    <main>
        <section class="single"><!--contains the post-->
            <header><!-- style="background:url('/anchor/content/<?php echo $imgSlug;?>-head.jpg') no-repeat center top; background-size: cover;"-->
                <h1 class="page-title"><?php echo article_title();?></h1>
            </header>
            <article class="description">
                <div class="wrap">
                    <div class="content">
                        <h2>Introduction</h2>
                        <?php echo article_description();?>
                        <h3>Built With</h3>
                        <?php show_tags();?>
                        <?php show_extra('div', 'extra');?>
                    </div>
                    <figure class="screenshot"><?php feat_img();?></figure>
                </div>
            </article>
            <article class="details">
                <div class="wrap"><?php echo article_markdown();?></div>
            </article>
        </section><!--end post container-->
    </main>
<?php theme_include('footer');?>