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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Varela+Round&display=swap" rel="stylesheet">
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
								<?php
								get_field('email', 'option');
								get_field('phone', 'option');
								?>
								<p class="mb-0">
									<?php echo $emailTopbar = (!empty(get_field('email', 'option'))) ? get_field('email', 'option') . ' &nbsp;|&nbsp;' : ''; ?>
									<?php echo $phoneTopbar = (!empty(get_field('phone', 'option'))) ? get_field('phone', 'option') : ''; ?>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<?php $social_media = get_field('social_media', 'option');
							if ($social_media) : ?>
								<div class="topbar-right text-end">
									<div class="footer-widget footer-widget-1" style="margin: 0px !important">
										<div class="footer-social mt-5" style="margin: 0px !important">
											<ul class="social-nav mt-3" style="margin: 0px !important; display: flex; justify-content: end;">
												<?php if (!empty($social_media['facebook'])) : ?>
													<li>
														<a href="<?php echo esc_url($social_media['facebook']); ?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
															<i class="fab fa-facebook-f"></i>
														</a>
													</li>
												<?php endif; ?>

												<?php if (!empty($social_media['twitter'])) : ?>
													<li>
														<a href="<?php echo esc_url($social_media['twitter']); ?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
															<i class="fab fa-twitter"></i>
														</a>
													</li>
												<?php endif; ?>

												<?php if (!empty($social_media['instagram'])) : ?>
													<li>
														<a href="<?php echo esc_url($social_media['instagram']); ?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
															<i class="fab fa-instagram"></i>
														</a>
													</li>
												<?php endif; ?>

												<?php if (!empty($social_media['linkedin'])) : ?>
													<li>
														<a href="<?php echo esc_url($social_media['linkedin']); ?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
															<i class="fab fa-linkedin"></i>
														</a>
													</li>
												<?php endif; ?>

												<?php if (!empty($social_media['pinterest'])) : ?>
													<li>
														<a href="<?php echo esc_url($social_media['pinterest']); ?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
															<i class="fab fa-pinterest"></i>
														</a>
													</li>
												<?php endif; ?>

												<?php if (!empty($social_media['youtube'])) : ?>
													<li>
														<a href="<?php echo esc_url($social_media['youtube']); ?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
															<i class="fab fa-youtube"></i>
														</a>
													</li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
					</div>
					<div class="row align-items-center">
						<div class="col-lg-3 col-5">
							<div class="logo-wrapper">
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php
									$header_image = get_header_image();
									if (!empty($header_image)) :
									?>
										<img src="<?php echo esc_url($header_image); ?>" class="logo" alt="<?php bloginfo('name'); ?>" />
									<?php
										$logo_light = get_field('logo_light', 'option');
									elseif (!empty($logo_light)) : ?>
										<img src="<?php echo esc_url($logo_light['url']); ?>" class="logo logo-black" alt="<?php echo esc_attr($logo_light['alt']); ?>" />
									<?php endif; ?>
								</a>
							</div>
						</div>
						<div class="col-xl-9 col-lg-6 d-none d-lg-block">
							<div class="nav-wrapper">
								<?php $menu = get_field('menu', 'option'); ?>
								<nav>
									<?php
									wp_nav_menu(
										array(
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
			<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-wrapper">
				<?php
				$logo_dark = get_field('logo_dark', 'option');
				if (!empty($logo_dark)) : ?>
					<img src="<?php echo esc_url($logo_dark['url']); ?>" class="logo logo-black" alt="<?php echo esc_attr($logo_dark['alt']); ?>" />
				<?php endif; ?>
			</a>
			<nav class="mobile-menu-wrapper mt-40">
				<?php
				wp_nav_menu(
					array(
						'theme_location'    => $menu['value'],
						'container'         => 'ul',
						'menu_class'        => '',
					)
				);
				?>
			</nav>
			<div class="contact-info mt-60">
				<h4 class="mb-20">Contact Info</h4>
				<p><?php echo $emailTopbar1 = (!empty(get_field('email', 'option'))) ? get_field('email', 'option') . ' | ' : ''; ?></p>
				<p><?php echo $phoneTopbar1 = (!empty(get_field('phone', 'option'))) ? get_field('phone', 'option') : ''; ?></p>
				<?php $social_media = get_field('social_media', 'option');
				if ($social_media) : ?>
				<div class="contact-social">
					<?php if (!empty($social_media['facebook'])) : ?>
						<a href="<?php echo esc_url($social_media['facebook']); ?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					<?php endif; ?>

					<?php if (!empty($social_media['twitter'])) : ?>
						<a href="<?php echo esc_url($social_media['twitter']); ?>" target="_blank">
							<i class="fab fa-twitter"></i>
						</a>
					<?php endif; ?>

					<?php if (!empty($social_media['instagram'])) : ?>
						<a href="<?php echo esc_url($social_media['instagram']); ?>" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					<?php endif; ?>

					<?php if (!empty($social_media['linkedin'])) : ?>
						<a href="<?php echo esc_url($social_media['linkedin']); ?>" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					<?php endif; ?>

					<?php if (!empty($social_media['pinterest'])) : ?>
						<a href="<?php echo esc_url($social_media['pinterest']); ?>" target="_blank">
							<i class="fab fa-pinterest"></i>
						</a>
					<?php endif; ?>

					<?php if (!empty($social_media['youtube'])) : ?>
						<a href="<?php echo esc_url($social_media['youtube']); ?>" target="_blank">
							<i class="fab fa-youtube"></i>
						</a>
					<?php endif; ?>
				</div>
				<?php endif;?>
			</div>
		</div>
		<!--mobile menu end-->