<?php get_header(); ?>

<main>

    <div class="each-page-content-wrapper">

      <h2 class="section__title">
        <span class="en">About</span>
        <span class="ja">私について</span>
      </h2>

      <div class="about-content wrapper">
        <div class="picture">
          <img src="<?php echo esc_url(get_theme_file_uri('img/my-picture.jpg')); ?>" width="500px" height="auto" alt="">
        </div>

        <div class="about-description">
          <ul>
            <li>Tomoko</li>
            <li>岐阜県出身、愛知県在住。</li>
          </ul>
          <p>初めまして。WEB制作をしております。</p>
          <p>花屋でのポップ作りをきっかけに、グラフィックデザインに興味を持ち、ドリンクメニューを中心に制作。
            ユーザーに対してアクションを促すことに魅力を感じ、WEB制作に興味を持ち始めました。
            その後、記述したコードがデザインとして反映される、インターフェースに面白みを覚え、２０２４年より、学習をスタート。
          </p>
        </div>
      </div>

      <div class="arrow-button-left-container">
        <a class="arrow-button-left" href="<?php echo home_url();?>">
          Topページへ戻る
        </a>
      </div>

  </main>

  <?php get_footer(); ?>