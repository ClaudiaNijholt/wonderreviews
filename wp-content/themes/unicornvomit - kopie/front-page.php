<?php

/** config for home template **/
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
<h1 class="h1-homepage">Laatste reviews</h1>
<br>
<div class="review">
    <div class="review-img">

    </div>
</div>
<div class="review">
    <div class="review-img">
        
    </div>
</div>