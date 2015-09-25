<?php theme_include('header');
$imgSlug = article_custom_field('img-slug');?>
    <!--start the blog page-->
    <main>
        <section class="single"><!--contains the post-->
            <header><!-- style="background:url('/anchor/content/<?php echo $imgSlug;?>-head.jpg') no-repeat center top; background-size: cover;"-->
                <h1 class="page-title"><?php echo article_title();?></h1>
            </header>
            <article class="article__intro">
                <div class="wrap">
                    <div class="article__content">
                        <h2>Introduction</h2>
                        <?php echo article_description();?>
                        <h3>Built With</h3>
                        <?php show_tags();?>
                        <?php show_extra('div', 'extra');?>
                    </div>
                    <aside>
                        <figure class="screenshot">
                            <?php feat_img();?>
                            <figcaption>TSP Schedule Page</figcaption>
                        </figure>
                        <p><a href="<?php project_url();?>" role="button" class="button">View Live</a></p>
                    </aside>
                </div>
            </article>
            <article class="article__details">
                <div class="wrap">
                    <!--<aside class="screen-gallery" id="gallery" data-chocolat-title="<?php echo article_title();?> &mdash; Screenshots">
                        <h3>Screenshots</h3>
                        <?php images_for_post();?>
                    </aside>-->

                    <div class="article__content">
                        <?php echo article_markdown();?>
                    </div>


                </div>
            </article>
        </section><!--end post container-->
<?php theme_include('footer');?>