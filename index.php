<?php
  include('header.php');
  include('sidebar.php');
  if (have_posts()) { while (have_posts()) { the_post();
?>
<section id="main" class="<?php echo get_post_type( get_the_ID() ); ?>">
  <article>
    <div class="content"><?php the_content(__()); ?></div>
  </article>
</section>
<?php
  } }
  include('footer.php');
?>