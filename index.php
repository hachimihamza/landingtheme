<?php get_template_part('templates/page', 'header'); ?>

<!--
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
-->
<div class="container-fluid red-background">
<div class="persons-container">
<? for($i=0; $i<20; $i++) { ?>
<div class="person">
  <img class="img-person" src="<?= get_template_directory_uri(); ?>/dist/images/140x135.png" />
  <p class="text-person">Des abdos</p>
</div>
<? } ?>
</div>
</div>
<div class="action">
<p>Je veux envoyer mon voeu</p>
</div>
<?php the_posts_navigation(); ?>
