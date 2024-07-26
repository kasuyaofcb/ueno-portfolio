<?php get_header(); ?>

<main>
  <div class="each-page-content-wrapper">
    <h2 class="description__title">
      <span class="en"><?php the_title(); ?></span>
    </h2>

    <div class="description-wrapper">
      <div class="site-image">
        <?php
        $pic = get_field('pic');
        $pic_url = $pic['url'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="">
      </div>

      <div class="description-text-wrapper">
        <div class="content-area ">
          <p class="description-text"><?php the_content(); ?>
          </p>
        </div>

        <div class="category-area">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              $skills = get_field('skills');
              if ($skills) : ?>
                <ul class="works__content--skill">
                  <?php foreach ($skills as $skill) : ?>
                    <li><?php echo esc_html($skill); ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php else : ?>
                <p>No skills found</p>
          <?php endif;
            endwhile;
          endif;
          ?>

          <ul class="works__content--rink">
            <li><?php the_category(); ?></li>
          </ul>
          <p class="site-address">
            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'url', true)); ?>"target="_blank" rel="noopener noreferrer">
              <?php echo esc_html(get_post_meta(get_the_ID(), 'url', true)); ?>
            </a>
          </p>
        </div>

      </div>
    </div>

    <div class="prevNext wrapper">
      <?php
      $previous_post = get_previous_post();
      if ($previous_post) :
      ?>
        <div class="prevNext_item prevNext_item-prev">
          <a href="<?php the_permalink($previous_post); ?>">
            <svg width="16" height="24" viewBox="0 0 20 38">
              <path d="M0,0,19,19,0,38" transform="translate(20 38) rotate(180)" fill="none" stroke="#224163" stroke-width="1" />
            </svg>
            <span><?php echo get_the_title($previous_post); ?></span>
          </a>
        </div>
      <?php endif; ?>

      <?php
      $next_post = get_next_post();
      if ($next_post) :
      ?>
        <div class="prevNext_item prevNext_item-next">
          <a href="<?php the_permalink($next_post); ?>">
            <span><?php echo get_the_title($next_post); ?></span>
            <svg width="16" height="24" viewBox="0 0 20 38">
              <path d="M1832,1515l19,19L1832,1553" transform="translate(-1832 -1514)" fill="none" stroke="#224163" stroke-width="1" />
            </svg>
          </a>
        </div>
      <?php endif; ?>
    </div>

    <div class="arrow-button-left-container">
      <a class="arrow-button-left" href="<?php echo home_url('/works/'); ?>">
        一覧ページへ戻る
      </a>
    </div>

</main>


<?php get_footer(); ?>