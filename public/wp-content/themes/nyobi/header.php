<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<title>
<?php wp_title( ' | ', true, 'right' ); ?>
<?php bloginfo( 'name' ); ?>
</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <h1 class="logo">
    <a href="<?php echo home_url('/'); ?>">
      <img src="<?php echo get_template_directory_uri();//wpテンプレートパス ?>/images/anonymous-logo.png" alt="logo">
    </a>
  </h1>
  <nav class="pc-menu">
    <ul class="pc-only">
      <li><a href="/nav1/">nav1</a></li>
      <li><a href="#">nav2</a></li>
      <li><a href="#">nav3</a></li>
    </ul>
  </nav>
  <a class="button pc-only" href="/contact/">お問い合わせ</a>
  <a href="#" class="menu sp-only">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-menu.png" alt="メニュー" class="icon-menu">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" alt="閉じる" class="icon-close">
  </a>
</header>
<nav class="sp-menu">
  <ul>
    <li><a href="#">nav1</a></li>
    <li><a href="#">nav2</a></li>
    <li><a href="#">nav3</a></li>
    <li><a href="#">お問い合わせ</a></li>
  </ul>
</nav>