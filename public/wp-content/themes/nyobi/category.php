<?php get_header(); ?>

<main>

<div class="main-wrapper">
  <h1 class="header"><?php single_cat_title(); ?></h1>
  <div class="post-list">
    <?php
      if(have_posts())://記事があるかないかを判断
        // 記事を繰り返し表示するプログラムを記述
        while(have_posts()) : the_post();//記事が存在するかぎり繰り返す
        ?>
        <div class="post-item">
          <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } else {
              ?>
              <img src="https://via.placeholder.com/100?text=nop" alt="no-thumbnail" class="attachment-thumbnail">
              <?php
            }
          ?>
          <h2><a href="<?php the_permalink();//リンク取得 ?>"><?php the_title(); //記事のタイトルを取得?></a></h2>
          <p class="post-meta"> 
            <span class="post-meta"><?php the_time('Y年n月j日'); ?> : <?php the_time('g:i a'); ?></span>
            <span class="post-categories"><?php the_category(','); ?></span>
          </p>
          <?php the_excerpt(); ?>
        </div>
        <?php
        endwhile;//ループ終了
      else:
      ?>
      <div class="post">
        <h2>記事はありません</h2>
        <p>お探しの記事はありませんでした</p>
      </div>
    <?php
      endif;//if文はここまで
    ?>
  </div>
  <?php the_posts_pagination(); ?>
</div>

</main>

<?php get_footer(); ?>