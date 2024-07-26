<?php get_header(); ?>


<!-- main -->
<main>

  <section class="mainview">
    <div class="mainview-wrapper">
      <img class="main-view__img" src="<?php echo esc_url(get_theme_file_uri('img/mainVisual.jpg')); ?>" alt="">
      <h1>Portfolio</h1>
    </div>
  </section>


  <!-- section about -->
  <section id="about" class="about wrapper">
    <h2 class="section__title">
      <span class="en">About</span>
      <span class="ja">私について</span>
    </h2>
    <p>初めまして。WEB制作をしております。<br>
    花屋でのポップ作りをきっかけに、グラフィックデザインに興味を持ち...</p>
    <div class="button--small">
      <a href="<?php echo esc_url(home_url('/about/'))?>">
        read more
      </a>
    </div>
  </section>

  <!-- section works -->
  <section id="works" class="works">
    <h2 class="section__title">
      <span class="en">Works</span>
      <span class="ja">制作物</span>
    </h2>


    <div class="wrapper">
      <!-- swiper -->
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
        'posts_per_page' => 3,
        'paged' => $paged
      );
      $works_query = new WP_Query($args);
      ?>

      <div class="swiper">
        <div class="swiper-wrapper">

          <?php if ($works_query->have_posts()) : ?>
        <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>

              <div class="swiper-slide">
<!-- パーシャルファイル -->
                <?php get_template_part('template-parts/loop', 'works') ?>

              </div><!-- swiper-slide -->
            <?php endwhile; ?>
          <?php endif; ?>
        </div><!-- swiper-wrapper -->

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div> <!-- swiper -->

      <a class="archive-button arrow-button-right" href="<?php echo home_url('/works/'); ?>">
        一覧ページへ
      </a>
    </div>
  </section>


  <!-- section service -->
  <section id="service" class="service">

    <h2 class="section__title">
      <span class="en">Service</span>
      <span class="ja">できること</span>
    </h2>

    <ul class="service__inner wrapper">
      <li>
        <img src="<?php echo esc_url(get_theme_file_uri('img/service01.png')); ?>" alt="デザインのイメージ画像です。">
        <h3 class="service__content--title">
          デザイン
        </h3>
        <p>
          デザインができます。
        </p>
        <p>
          figmaを使用して、ウェブサイトのデザインをします。illustratorでのデザインも可能です。
        </p>
        <p>
          ヒアリングを大切にし、クライアントの意向を形に出来るよう努めます。
        </p>
      </li>

      <li>
        <img src="<?php echo esc_url(get_theme_file_uri('img/service02.png')); ?>" alt="コーディングのイメージ画像です。">
        <h3 class="service__content--title">
          コーディング
        </h3>
        <p>
          コーディングができます。
        </p>
        <p>
          あらゆるデバイスで見やすく表示されるウェブサイトを作成します。ユーザーエクスペリエンスを向上させるためのアニメーションやインタラクティブな要素を取り入れた、動きのあるデザインを実現します。
        </p>
      </li>

      <li>
        <img src="<?php echo esc_url(get_theme_file_uri('img/service03.png')); ?>" alt="修正のイメージ画像です。">
        <h3 class="service__content--title">
          修正
        </h3>
        <p>
          既存HPの修正ができます。
        </p>
        <p>
          ページの追加、テキストや画像の差し替え、加工、変更（著作権フリー画像の用意可能）、動画や地図、snsリンクの追加、レスポンシブデザインへの修正。
        </p>
        <p>
          その他、ご要望がございましたら、一度ご相談ください。
        </p>
      </li>
    </ul>
  </section>



  <!-- section contact -->
  <section class="contact">
    <div class="contact-wrapper--navy">

      <div class="contact--left">
        <h2 class="section__title contact-section__title">
          <span class="en">Contact</span>
          <span class="ja">お問合せ</span>
        </h2>
        <p class="contact-section__text">
          お気軽にお問合せください。
        </p>
      </div>

      <div class="contact--right">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
          contact
        </a>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>