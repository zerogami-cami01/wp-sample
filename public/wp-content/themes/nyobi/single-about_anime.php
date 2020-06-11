<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <h1 class="tect-center">アニメ一覧</h1>
    <div class="about_anime-list">
      <article>
        <?php
          if (have_posts()):
            while (have_posts()) : the_post();
            ?>
            <section>
              <img src="<?php the_field('avater') ?>" alt="" class="about_anime-avater">
              <h2 class="about_anime-name"><?php the_title(); ?></h2>
              <ul class="about_anime-genre">
                <?php $terms = get_the_terms($post->ID,'genre'); ?>
                <?php
                  foreach ($terms as $term) {
                    echo '<li>' . $term->name . '</li>';
                  }
                ?>
              </ul>
              <?php if (get_field('twitter')): ?>
              <a href="https://twitter.com/<?php the_field('twitter'); ?>"><?php the_field('twitter') ?></a>
              <?php endif; ?>
              <?php the_content(); ?>
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