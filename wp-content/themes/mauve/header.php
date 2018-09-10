<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mauve
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mauve' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="navbar-header" class="navbar" style="width: 100%; padding-left: 0; padding-right: 0;" role="navigation">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div>
			<div style="display: flex; justifiy-content: right;">
				<ul class="language-selector language-selector-desktop" style="margin-top: auto; margin-bottom: auto; margin-right: 2.9rem;">
					<?php
					pll_the_languages(array('display_names_as' => 'slug', 'hide_if_empty' => 0 ));
					?>
				</ul>
				<button 
					id="navigation-menu-toggle-button"
					class="hamburger hamburger--squeeze"
					type="button"
					style="display: flex; color: #B9A461; padding-right: 0; position:relative; top: 2px;"
					data-toggle="collapse"
					data-target="#navbarDropdownContent"
					aria-controls="navbarDropdownContent"
				>
					<span class="navigation-menu-toggle-button__text" style="margin-right: 0.7rem; font-size: 1.1rem;">
						<?php
						if(pll_current_language() === "ro")
						{
							echo "Meniu";
						}
						else if(pll_current_language() === "en")
						{
							echo "Menu";
						}
						?>
					</span>
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarDropdownContent">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				<div style="position:relative; top: -1rem;">
					<?php if ( dynamic_sidebar('phone-number-navigation') ) : else : endif; ?>
				</div>
				<div>
					<ul class="language-selector language-selector-mobile" style="margin-top: auto; margin-bottom: auto; margin-top: 0.7rem;">
						<?php
						pll_the_languages(array('display_names_as' => 'slug', 'hide_if_empty' => 0 ));
						?>
					</ul>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<script>
		var elButtonNavigationMenuToggleButton = document.getElementById("navigation-menu-toggle-button");
		var elButtonNavigationMenuToggleButtonText = elButtonNavigationMenuToggleButton.getElementsByClassName("navigation-menu-toggle-button__text")[0];

		elButtonNavigationMenuToggleButton.addEventListener("click", function(e)
		{
			if(elButtonNavigationMenuToggleButton.classList.contains("is-active"))
			{
				elButtonNavigationMenuToggleButton.classList.remove("is-active");
				elButtonNavigationMenuToggleButtonText.style.display = "";
			}
			else
			{
				elButtonNavigationMenuToggleButton.classList.add("is-active");
				elButtonNavigationMenuToggleButtonText.style.display = "none";
			}
		});
	</script>

	<div id="content" class="site-content">
