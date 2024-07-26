<?php get_header(); ?>

<main>
  <div class="each-page-content-wrapper">

    <h2 class="section__title">
      <span class="en">Works</span>
      <span class="ja">制作物</span>
    </h2>

    <div class="wrapper">
      <!-- <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
        'posts_per_page' => 5,
        'paged' => $paged
      );
      $works_query = new WP_Query($args);
      ?> -->

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <!-- パーシャルファイル -->
          <?php get_template_part('template-parts/loop', 'works') ?>

        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

      <?php
      $pagination_args = array(
        'total' => $works_query->max_num_pages,
        'current' => $paged,
        'type' => 'list',
        'prev_text' => '<',
        'next_text' => '>'
      );
      echo paginate_links($pagination_args);
      ?>
    </div>



    <div class="arrow-button-left-container">
      <a class="arrow-button-left" href="<?php echo home_url(); ?>">
        Topページへ戻る
      </a>
    </div>

  </div>
</main>

<?php get_footer(); ?>