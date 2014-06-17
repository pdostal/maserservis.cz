<?php
  include('header.php');
  include('sidebar.php');
?>
<section id="main" class="<?php echo get_post_type( get_the_ID() ); ?>">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
  <article>
    <div class="content"><?php the_content(__()); ?></div>
  </article>
<?php } } ?>
</section>
<?php
  include('footer.php');
?>