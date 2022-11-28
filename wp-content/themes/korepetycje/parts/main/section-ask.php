<?php
$title = get_field('contact_title');
$subtitle = get_field('contact_subtitle');
$form = get_field('contact_form');
$background = get_field('contact_background');
?>
<section class="home__contact lazybg" data-background='<?= $background['url'] ?>'>
    <?php if ($title || $subtitle) : ?>
        <div class="home__contact_head">
            <?php if ($title) : ?>
                <h2 class="home__contact_title section-title">
                    <?= $title; ?>
                </h2>
            <?php endif; ?>
            <?php if ($subtitle) : ?>
                <h4 class="home__contact_subtitle section-subtitle">
                    <?= $subtitle; ?>
                </h4>
            <?php endif; ?>
        </div>
        <div class="home__contact_form">
            <?= do_shortcode($form); ?>
        </div>
    <?php endif; ?>
</section>