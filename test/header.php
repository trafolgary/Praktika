<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header">
<div class = "header container">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
				
<svg class="phone" width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_f_0_1)">
<ellipse cx="30.3448" cy="30" rx="10.3448" ry="10" fill="#FFA83E" fill-opacity="0.4"/>
</g>
<ellipse cx="28" cy="26.5" rx="15" ry="14.5" fill="white"/>
<path d="M25.4185 26.3134C25.9048 27.3074 26.7105 28.1096 27.7068 28.5913C27.7797 28.6258 27.8603 28.6408 27.9408 28.6347C28.0212 28.6286 28.0987 28.6017 28.1655 28.5566L29.6325 27.5784C29.6973 27.5351 29.772 27.5087 29.8496 27.5016C29.9273 27.4944 30.0055 27.5068 30.0772 27.5375L32.8215 28.7137C32.9148 28.7533 32.9926 28.8221 33.0433 28.9098C33.094 28.9975 33.1148 29.0992 33.1027 29.1998C33.0159 29.8786 32.6848 30.5024 32.1712 30.9546C31.6576 31.4067 30.9968 31.6562 30.3125 31.6562C28.1991 31.6562 26.1722 30.8167 24.6777 29.3222C23.1833 27.8278 22.3438 25.8009 22.3438 23.6875C22.3438 23.0032 22.5932 22.3424 23.0454 21.8288C23.4976 21.3152 24.1214 20.984 24.8002 20.8973C24.9007 20.8851 25.0025 20.906 25.0902 20.9567C25.1779 21.0074 25.2467 21.0852 25.2863 21.1785L26.4635 23.9252C26.4939 23.9962 26.5063 24.0737 26.4996 24.1507C26.4929 24.2277 26.4672 24.3019 26.4249 24.3665L25.4501 25.856C25.4057 25.923 25.3795 26.0003 25.3739 26.0805C25.3684 26.1607 25.3838 26.2409 25.4185 26.3134V26.3134Z" fill="#FFA83E" fill-opacity="0.9" stroke="#FFA83E" stroke-opacity="0.9" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
<defs>
<filter id="filter0_f_0_1" x="0" y="0" width="60.6897" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_0_1"/>
</filter>
</defs>
</svg>
<p class="nomer"> 8 800 547 55 66 </p>
</div>
	</header><!-- #masthead -->
