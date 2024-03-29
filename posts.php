<?php theme_include('header');?>
    <!--start the blog page-->
    <main>
        <header>
            <?php if(is_homepage() && is_homepage()):?>
                <div class="portfolio-header"><?php echo page_content();?></div>
            <?php endif;?>
            <?php if(is_postspage() && !is_homepage()):?>
                <h1><?php echo page_title();?></h1>
            <?php endif;?>
        </header>
        <span id="content"></span>
        <?php if( has_posts() ) : while ( posts() ): ?>
            <article class="piece"><!--contains the post-->
                <div class="wrap"><!--wrap that content-->
                    <!--featured image-->
                    <div class="featured-image">
                        <?php feat_img(); ?>
                    </div>
                    <div class="piece-desc">
                        <!--title of the post-->
                        <h1 class="post-title"><?php echo article_title(); ?></h1>
                        <?php
                        //if there is a write-up included, the description shouldn't be empty & article should link to write up
                        if(trim(article_description()) == true):?>
                            <div class="description"><?php echo article_description(); ?></div>
                            <p class="buttons"><a href="<?php echo article_url();?>" class="case-study" role="button">More Details</a>
                                <a href="<?php project_url();?>" class="view-live" role="button">View Live</a></p>
                        <?php endif;?>
                        <?php
                        //if there is no writeup, there is no description, only view live button
                        if(trim(article_description()) == false):?>
                            <div class="description"><?php echo article_markdown(); ?></div>
                            <p class="buttons"><a href="<?php project_url();?>" class="view-live">View Live</a></p>
                        <?php endif;?>

                    </div><!--end floating right container-->

                </div><!--end content wrap-->
            </article><!--end post container-->
        <?php endwhile; endif; ?>

        <nav class="pagination">
            <?php if ( has_pagination() ):?>
                <?php echo posts_prev(); ?>
                <?php echo posts_next(); ?>
            <?php endif;?>
        </nav>
<?php theme_include('footer');?>