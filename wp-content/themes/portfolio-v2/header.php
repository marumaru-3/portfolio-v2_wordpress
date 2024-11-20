<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>鈴木 幸長 | Suzuki Yukinaga Web Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Noto+Sans+JP:wght@100..900&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
  <header>
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <span class="name"> 鈴木 幸長 | Suzuki Yukinaga </span>
        Web Portfolio
      </a>
    </h1>
    <div class="header-menu">
      <button class="header-menu_btn">
        <div class="line-group">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <p class="menu-text">MENU</p>
      </button>
      <div class="header-menu_list">
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#about">About</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#skills">Skills</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>works">Works</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>#web-app">Web App</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </header>