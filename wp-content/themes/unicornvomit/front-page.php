<?php

/** config for home template **/
$archive = get_post_type_archive_link('reviews');
?>




<div class="banner">
    <img src=<?php echo get_stylesheet_directory_uri() . "/assets/img/logo_large.png" ?> alt="">
</div>
<h3 class="slowgun">Wereld vol wonderen</h3>
<br>
<h1 class="h1-homepage">Laatste reviews</h1>
<br>
<?php

$arguments = [
    'post_type' => 'reviews', 'numberposts' => 2, 'category' => 0, 'orderby' => 'date',
    'order' => 'DESC'
];
$reviewsItemCollection = get_posts($arguments);

foreach ($reviewsItemCollection as $review) :
    $link = get_permalink($review);
    $url = get_field('link', $review->ID);

?>
    <div class="review">
        <div class="review-img"><img src="<?php echo get_field('image', $review->ID) ?>" alt=""></div>
        <div class="review-text">
            <h1><?php echo $review->post_title; ?></h1>
            <p>Posted on: <?php echo $review->post_date ?></p>
            <p><?php echo get_field('score', $review->ID) ?>/10</p>
            <div class="col-12">
                <button><a href="<?php echo $link; ?>">Lees Review</a></button>
            </div>
        </div>
    </div>
<?php
endforeach;
?>