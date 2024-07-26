<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name') ?></title>
  <meta name="description" content="上野智子のポートフォリオサイトです。">
  <meta name="keywords" content="ポートフォリオ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”robots” content=”noindex”>
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>" type="image/x-icon">
  <link rel="canonical" href="正規ページURL（https://〜）">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="script.js" defer></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header id="header" class="header">
    <div class="header_wrapper">

      <div class="header__logo">
        <a href="<?php echo home_url(); ?>">
          <img class="header__img" src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt="">
        </a>
      </div>

      <div class="header__navArea">
        <div class="header__nav-inner">
          <nav>
            <ul>
              <?php
              wp_nav_menu(array(
                'theme_location' => 'global'
              ));
              ?>
            </ul>
          </nav>

          <div class="button--small button-contact-s">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              contact
            </a>
          </div>
        </div>

        <div class="hamburger-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>

      </div>

    </div>
  
  </header>
  
  <?php get_template_part('template-parts/breadcrumb'); ?>