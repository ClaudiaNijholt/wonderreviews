<?php

$archive = get_post_type_archive_link('reviews');

?>

<div>
    <nav>
        <ul>
            <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
            <img src="<?php echo get_stylesheet_directory() . 'assets/img/logo_small_icon_only_inverted.png'; ?>" alt="">
            <li><a href="<?php echo $archive; ?>">Overzichtspagina</a></li>
        </ul>
    </nav>
</div>
<div class="banner">
    <img src=<?php echo get_stylesheet_directory_uri() . "/assets/img/logo_large.png" ?> alt="">
</div>
<h3 class="slowgun">Wereld vol wonderen</h3>
<br>
<h1 class="h1-reviewpage">Alle Reviews</h1>
<br>
<?php

$arguments = [
    'post_type' => 'reviews', 'numberposts' => -1, 'category' => 0, 'orderby' => 'date',
    'order' => 'DESC'
];
$reviewsItemCollection = get_posts($arguments);

foreach ($reviewsItemCollection as $review) {
    var_dump(get_permalink($review));
?>
    <div class="review">
        <div class="review-img"><img src="<?php echo get_field('image', $review->ID) ?>" alt=""></div>
        <div class="review-text">
            <h1><?php echo $review->post_title; ?></h1>
            <p><?php echo get_field('score', $review->ID) ?>/10</p>
            <p>Posted on: <?php echo $review->post_date ?></p>
        </div>
    </div>
<?php
}
?>