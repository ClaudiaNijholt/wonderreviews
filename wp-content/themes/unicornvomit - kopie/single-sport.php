<?php

$title = get_the_title();
$content = get_the_content();

$sportCategories = get_the_terms(\get_post(), 'sportCategory');
var_dump($title);
var_dump($content);
var_dump($sportCategories);
exit();

render('views/templates/sport-detail.php', compact('title','content', 'sportCategories'));