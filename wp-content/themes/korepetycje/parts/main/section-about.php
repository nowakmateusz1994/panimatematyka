<?php
$title = get_field('about_title');
$subtitle = get_field('about_subtitle');
$description = get_field('about_description');
$img = get_field('about_img');
?>

<section id='about' class="home__about">
    <?php if ($title || $subtitle || $description) : ?>
        <div class="home__about-content section-title">
            <?php if ($title) : ?>
                <h2 class="home__about-title">
                    <?= $title; ?>
                </h2>
            <?php endif; ?>
            <?php if ($subtitle) : ?>
                <h3 class="home__about-subtitle section-subtitle">
                    <?= $subtitle; ?>
                </h3>
            <?php endif; ?>
            <?php if ($description) : ?>
                <div class="home__about-description">
                    <?= $description;  ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($img) : ?>
            <div class="home__about-img">
                <img src='<?= $img['url'] ?>' alt='<?= $img['description'] ?>' />
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>