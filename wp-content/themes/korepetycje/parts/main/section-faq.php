<?php
$title = get_field('faq_title');
$subtitle = get_field('faq_subtitle');
$items = get_field('faq_wpisy');
?>
<section class="home__faq" id='faq'>
    <?php if ($title || $subtitle) : ?>
        <div class="home__faq_head">
            <?php if ($title) : ?>
                <h3 class="home__faq_title">
                    <?= $title; ?>
                </h3>
            <?php endif; ?>
            <?php if ($subtitle) : ?>
                <h4 class="home__faq_title">
                    <?= $subtitle; ?>
                </h4>
            <?php endif; ?>
        </div>
        <?php if ($items) : ?>
            <div class='home__faq_items'>
                <?php foreach ($items as $item) : ?>
                    <div class="home__faq_item">
                        <h4 class="home__faq_item_title">
                            <?= $item['title']; ?>
                        </h4>
                        <div class="home__faq_item_description">
                            <?= $item['description']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>