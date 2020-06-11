<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <h1 class="text-center">nav1の題名</h1>
    <p>nav1についての説明</p>
    <img src="https://via.placeholder.com/1000x250?text=nop" alt="nav1のメイン画像" class="image-responsive">
    <h2 class="text-center">nav1のサブ見出し</h2>
    <p>記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事記事</p>
    <?php
      if (have_posts()):
        while(have_posts()) : the_post();
          the_content();
        endwhile;
      endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>