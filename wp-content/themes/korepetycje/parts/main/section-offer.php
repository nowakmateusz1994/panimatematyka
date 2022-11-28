<?php
$title = get_field('offer_title');
$subtitle = get_field('offer_subtitle');
$items = get_field('offer_items');
?>
<section id="offer" class="home__offer">
    <div class="home__offer_head">
        <?php if ($title) : ?>
            <h2 class="section-title home__offer_title">
                <?= $title; ?>
            </h2>
        <?php endif; ?>
        <?php if ($subtitle) : ?>
            <h4 class="home__offer_subtitle">
                <?= $subtitle; ?>
            </h4>
        <?php endif; ?>
    </div>
    <?php if ($items) : ?>
        <div class="home__offer_items">
            <?php foreach ($items as $item) : ?>
                <div class="home__offer_item">
                    <?php if ($item['icon']) : ?>
                        <div class="home__offer_item_icon">
                            <img src='<?= $item['icon']['url']; ?>' />
                        </div>
                    <?php endif; ?>
                    <?php if ($item['title']) : ?>
                        <h2 class="home__offer_item_title">
                            <?= $item['title']; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($item['description']) : ?>
                        <div class="home__offer_item_description">
                            <?= $item['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>