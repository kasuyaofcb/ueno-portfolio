<?php get_header(); ?>

<main>
  <div class="each-page-content-wrapper">
    <h2 class="section__title">
      <span class="en"><?php single_cat_title(); ?></span>

    </h2>

    <div class="wrapper">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <?php get_template_part('template-parts/loop', 'works') ?>

        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
      <?php
      $pagination_args = array(
        
        'type' => 'list',
        'prev_text' => '<',
        'next_text' => '>'
      );
      echo paginate_links($pagination_args);
      ?>
    </div>

    <div class="arrow-button-left-container">
      <a class="arrow-button-left" href="<?php echo home_url('/works/'); ?>">
        一覧ページへ戻る
      </a>
    </div>

  </div>
</main>

<?php get_footer(); ?>