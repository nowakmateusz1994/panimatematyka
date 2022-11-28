<?php
$backgroud = get_field('banner_background');
$title = get_field('banner_title');
$description = get_field('banner_description');
?>
<section class="home__banner lazybg" data-background='<?= $backgroud['url'] ?>'>
    <?php if ($title || $description) : ?>
        <div class="home__banner-content">
            <?php if ($title) : ?>
                <div class="home__banner-title"><?= $title; ?></div>
            <?php endif; ?>
            <?php if ($description) : ?>
                <div class="home__banner-subtitle"><?= $description; ?></div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>