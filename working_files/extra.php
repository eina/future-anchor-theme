<?php

//display images related to post from the content folder
function images_for_post(){
    //grab the slug custom field that has the name as the images
    $imgSlug = article_custom_field('img-slug');
    $screenTitles = article_custom_field('screen-titles');
    $hasContent ='';
    if(!empty($imgSlug) && !empty($screenTitles)){
        $hasContent = true;
        //put the files with the slug in an array
        $count = '';
        $images = glob('content/'.$imgSlug.'/{*.jpg,*.png}', GLOB_BRACE);
        $title = explode("|", $screenTitles);
        //var_dump($title);
        echo '<ul>';
        foreach ($images as $anImage){
            $count++;
            echo '<li><a class="chocolat-image" href="/anchor/'.$anImage.'">';
            echo'<img class="shot" src="/anchor/'.$anImage.'" alt="';
            echo $title[$count - 1];
            echo' Screenshot"><span class="title">';
            echo $title[$count - 1];
            echo'</span></a></li>';
        }
        echo '</ul>';
    }else {
        $hasContent = false;
    }
}

<!--<aside class="screen-gallery" id="gallery" data-chocolat-title="<?php echo article_title();?> &mdash; Screenshots">
                        <h3>Screenshots</h3>
                        <?php //images_for_post();?>
</aside>-->