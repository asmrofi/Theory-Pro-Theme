<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theory_Pro
 */

?>

<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html<?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(array("theorypro","theor"));?>>

        <!-- Header -->
        <header id="header">
            <div class="inner">
                <a href="index.html" class="logo">Theory</a>

                <?php
				wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id' => 'nav',
			) );
			?>

                <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
            </div>
        </header>
