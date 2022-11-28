<?php
/*
  Template Name: Strona główna
 */

get_header();
?>
<div class="content">
  <?php get_template_part('/parts/main/section', 'baner'); ?>
  <?php get_template_part('/parts/main/section', 'about'); ?>
  <?php get_template_part('/parts/main/section', 'offer'); ?>
  <?php get_template_part('/parts/main/section', 'faq'); ?>
  <?php get_template_part('/parts/main/section', 'ask'); ?>
</div>

<?php
get_footer();
?>