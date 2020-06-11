<?php get_header(); ?>

<main>

<div class="main-wrapper">
  <h1 class="header">新着のお知らせ</h1>
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
              <img src="https://via.placeholder.com/1000x250?text=nop" alt="no-thumbnail" class="attachment-thumbnail">
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

  <h1 class="header">アニメ一覧</h1>
  <?php 
    $args = array(
    'post_type' => 'about_anime',
    'posts_per_page' => '3',
  ); ?>
  <div class="about_anime-list">
    <article>
    <?php $about_anime_query = new WP_Query( $args ); ?>
    <!-- ここにWordPressループを使って出力内容を記述する -->
    <?php while ( $about_anime_query->have_posts() ) : $about_anime_query->the_post(); ?>
    <!-- ここに出力内容を記述します -->
    <section>
      <img src="<?php the_field('avater'); ?>" alt="" class="about_anime-avater">
      <h2 class="about_anime-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <ul class="about_anime-genre">
        <?php $terms = get_the_terms($post->ID,'genre'); ?>
        <?php
          foreach ($terms as $term) {
            echo '<li>' . $term->name . '</li>';
          }
        ?>
      </ul>
    </section>
    <?php endwhile; ?>
    </article>
  </div>
  <div class="text-center"><a href="/about_anime/">一覧を見る</a></div>

</div>

</main>

<?php get_footer(); ?>