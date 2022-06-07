<?php
$archive = get_post_type_archive_link('reviews');


$post = get_post();
$title = get_the_title();

?>

<div class="single-review">
    <div class="single-review-img"><img src="<?php echo get_field('image', $post->ID) ?>" alt=""></div>
    <div>
        <div class="col-12 single-review-text">
            <h1><?php echo $title; ?></h1>
            <div>
                <p class="date">Posted on: <?php echo $post->post_date ?></p>
                <p class="score">Waardering: <?php echo get_field('score', $post->ID) ?>/10</p>
            </div>
            <p class="content"><?php echo $post->post_content ?></p>
        </div>
    </div>
</div>