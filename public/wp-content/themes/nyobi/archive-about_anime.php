<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <h1 class="text-center">アニメ一覧</h1>
    <div class="about_anime-list">
      <article>
        <?php
          if (have_posts()):
            while (have_posts()) : the_post(); //これは投稿設定に依存するから、全部を表示したい場合WP_Queryを使用するのが好ましい。
            ?>
            <section>
              <img src="<?php the_field('avater'); ?>" alt="" class="about_anime-avater">
              <h2 class="about_anime-name"><a href="<?php the_permalink(); ?>"></a></h2>
              <ul class="about_anime-genre">
                <?php $terms = get_the_terms($post->ID, 'genre'); ?>
                <?php
                  foreach ($terms as $term)
                    echo '<li>' . $term->name . '</li>';
                ?>
              </ul>
            </section>
        <?php
            endwhile;
          endif;
        ?>
      </article>
    </div>
  </div>
</main>

<?php get_footer(); ?>