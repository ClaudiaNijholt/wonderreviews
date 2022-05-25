<?php
$menuItems = wp_get_nav_menu_items('Main Menu');
?>

<div>
    <nav>

        <?php if ($menuItems) : ?>
            <ul>
                <?php foreach ($menuItems as $item) : ?>
                    <li>
                        <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </nav>
</div>