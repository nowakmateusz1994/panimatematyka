<?php
get_header();
?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div>
            <?= the_title(); ?>
        </div>
    <?php endwhile; ?>

<?php
endif;
get_footer();
