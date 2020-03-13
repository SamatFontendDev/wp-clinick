<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/imgs/pictures/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/imgs/pictures/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/imgs/pictures/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/imgs/pictures/favicon-16x16.png">
	<?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>
<body <?php body_class(); ?>>
<div class="wrapper">
<header class="header">
            <div class="header__bottom">
                <div class="container">
                    <div class="header-bottom-row">
                        <div class="logo">
                            <a href="/" class="logo__kink">
                                <img src="<?php echo get_template_directory_uri() ?>/imgs/rocada-logo.png" alt="" class="logo-img">
                            </a>
                        </div>
                        <a href="/kontakti" class="adress">
                            <div class="adress__icon">
                                <svg class="location">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#location"></use>
                                </svg>
                            </div>
                            <div class="adress__text">г. Казань ул.Петербургская 26</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__top">
                <div class="container">
                    <div class="header-row">
                        <div class="menu-button">
                            <svg class="menu-svg">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#menu"></use>
                            </svg>
                        </div>
                        <nav class="nav">
                            <div class="mobile-menu-button">
                                <svg class="menu-svg menu-svg_fill_white">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#menu"></use>
                                </svg>
                                <div class="mobile-menu-button__text">
                                    <span class="menu-text">МЕНЮ</span>
                                    <span class="close-text none">ЗАКРЫТЬ</span>
                                </div>
                            </div>
                            <ul class="nav-list">
                                <svg class="close--nav">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#close"></use>
                                </svg>
                                <li class="nav-item">
                                    <a href="/" class="nav__link">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/uslugi" class="nav__link">Услуги</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ceny" class="nav__link">Цены</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/vrachi" class="nav__link">Врачи</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/portfolio" class="nav__link">Портфолио</a>
                                </li>
                               <li class="nav-item">
                                    <a href="/o-nas" class="nav__link">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kontakti" class="nav__link">Контакты</a>
                                </li>
                                <li class="nav-item nav-item--phone">
                                    <a href="tel: <?php echo $redux_demo['header-phone'] ?>" class="phone">
                                        <svg class="phone-svg">
                                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#phone"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <a href="tel:<?php echo $redux_demo['header-phone'] ?>" class="tel-number"><?php echo $redux_demo['header-phone'] ?></a>
                        <div class="call-button sign-up">ЗАПИСАТЬСЯ</div>
                    </div>
                </div>
            </div>
            
        </header>

