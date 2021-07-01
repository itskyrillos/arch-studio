<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    wp_head();
    ?>
</head>

<body data-barba="wrapper">
<div class="circle"></div>

<nav class="navigation">
    <a class="navigation__logo" href="/">
        Home
    </a>

    <?php
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'menu_class' => 'navigation__list',
            'container' => '',
            'theme_location' => 'primary'
        )
    );
    ?>

    <button class="navigation__toggler">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </button>
</nav>
<div class="container">

