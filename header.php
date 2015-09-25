<!doctype html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="Anchor CMS" />

    <link rel="stylesheet" href="<?php echo theme_url('style.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo theme_url('chocolat/chocolat.css')?>" type="text/css">

    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>


    <title><?php
        if (!is_homepage() && !is_postspage()){
            echo ucfirst(body_class()) . ' &mdash; ';
        }
        if(is_postspage() && is_article()){
            echo 'Portfolio' . ' &mdash; ';
        }
        echo site_name() . ' | ' . site_description();
        ?></title>
</head>

<?php
echo '<body class="'.body_class().'">';
?>
<div class="site-container" id="top">
<?php theme_include('head-nav');?>


<?php
//Functions & Stuff

//Tags!
function show_tags(){
    if (article_custom_field('tags')) {
        $tagarray = array();
        $tagexplode = explode(",", article_custom_field('tags'));
        foreach ($tagexplode as $taggy) {
            $tagarray[] = '<li>'.strtoupper($taggy).'</li>';
            /*$tagarray[] = '<li><a href="'.tagged_url().'/'.$taggy.'">'.strtoupper($taggy).'</a></li>';*/
        }
        echo '<ul>' . implode($tagarray) . '</ul>';
    }
}

//Featured Image
function feat_img(){
    $featImg = article_custom_field('featimg');
    if(!empty($featImg)){
        echo '<img src="'.$featImg.'" alt="'.article_title().'">';
    }
}

//Live Project URL
function project_url(){
    $project_url = article_custom_field('project-url');
    if(!empty($project_url)){
        echo $project_url;
    }else {
        echo '#';
    }
}

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

//show the extra html field
function show_extra($surroundingtag, $class){
    if(trim(article_custom_field('extra')) == true){
        $extra=article_custom_field('extra');
        echo '<'.$surroundingtag.' class="'. $class .'">'.$extra.'</'.$surroundingtag.'>';
    }
}