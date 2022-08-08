<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package horsetechanalytics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-overlay"></div>
<!--main content wrapper start-->
	<div class="main-wrapper">
		<!--header area start-->
		<header class="header-gradient header-two position-relative">
			<div class="topbar">
			<div class="container">
				<div class="row align-item-center topbar1">
				<div class="col-md-6">
					<div class="topbar-left">
						<p class="mb-0">hrd1@horsetechanalytics.com | +91 9512234566 </p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="topbar-right text-end">
						<div class="footer-widget footer-widget-1" style="margin: 0px !important">
							<div class="footer-social mt-5" style="margin: 0px !important">
							<ul class="social-nav mt-3" style="margin: 0px !important; display: flex; justify-content: end;">
								<li><a href="https://www.facebook.com/horsetechanalyticsHTA/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_transition=0&show_community_review_changes=0&show_follower_visibility_disclosure=0" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<!-- <li><a href="#" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i class="fab fa-twitter"></i></a></li> -->
								<li><a href="https://www.instagram.com/accounts/login/?next=/horsetechanalytics/" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/company/horsetech-analytics/" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							</ul>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
				</div>
				<div class="row align-items-center">
				<div class="col-lg-3 col-5">
					<div class="logo-wrapper">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php
                           $header_image = get_header_image();
                           if ( ! empty( $header_image ) ) :
                              ?>
                           <img src="<?php echo esc_url( $header_image ); ?>" class="logo" alt="<?php bloginfo( 'name' ); ?>" />
                           <?php endif; ?>
						</a>
					</div>
				</div>
				<div class="col-xl-9 col-lg-6 d-none d-lg-block">
					<div class="nav-wrapper">
					<?php $menu = get_field('menu', 'option');
                    ?>
						<nav>
                    <?php wp_nav_menu( array(
                           'theme_location'    => $menu['value'],
                           'container'         => 'ul',
                           'menu_class'        => 'nav-menus',
                            )
                       );
                       ?>
						</nav>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-7">
					<div class="header-right-btn d-flex align-items-center justify-content-end">
						<a href="#" class="mobile-menu-toggle d-lg-none text-white ms-3"><i class="fa-solid fa-bars-staggered"></i></a>
					</div>
				</div>
				</div>
			</div>
		</header>
		<!--header area end-->
		<!--mobile menu start-->
		<div class="mobile-menu position-fixed bg-white deep-shadow">
			<button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-wrapper">
				<img src="<?php echo get_field('logo_dark', 'option');?>" alt="logo" 
				class="logo logo-black">
			</a>
			<nav class="mobile-menu-wrapper mt-40">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="aboutus.php">About us</a></li>
					<li class="has-submenu">
						<a href="#">Product</a>
						<ul class="menu-list">
							<li>
								<a href="consumer.php">
								<div class="menu-list-wrapper d-flex align-items-center">
									<div class="menu-list-content-right ms-3">
										<h6>Consumer</h6>
									</div>
								</div>
								</a>
							</li>
							<li>
								<a href="merchant.php">
								<div class="menu-list-wrapper d-flex align-items-center">
									<div class="menu-list-content-right ms-3">
										<h6>Merchant</h6>
									</div>
								</div>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="technology.php">Technology</a>
					</li>
					<li><a href="career.php">Career</a></li>
					<li><a href="contactus.php">Contact us</a></li>
					
				</ul>
			</nav>
			<div class="contact-info mt-60">
				<h4 class="mb-20">Contact Info</h4>
				<p>+88 01682648101</p>
				<p>info@horsetechanalytics.com</p>
				<div class="contact-social">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-vimeo"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>
		<!--mobile menu end-->