<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_nhom_L
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme_nhom_l' ); ?></a>

	<header id="masthead" class="site-header">
	<!-- Module 1 -->
	<div class="module-1">
        <div class="module-1__info">
            <span class="module-1__info-title">
                Follow Us:
                <a href="#" class="module-1__info-link">
                    <i class="fab fa-twitter module-1__info-icon"></i>
                </a>
                <a href="#" class="module-1__info-link">
                    <i class="fab fa-facebook-f module-1__info-icon"></i>
                </a>
                <a href="#" class="module-1__info-link"><i class="fab fa-instagram module-1__info-icon"></i></a>
                <a href="#" class="module-1__info-link"><i class="fab fa-linkedin-in module-1__info-icon"></i></a>
                
            </span>
        </div>
        <div class="module-1__adress">
            <div class="module-1__adress-item">
                <i class="fas fa-mobile-alt  module-1__adress-item-icon"></i>
                156-677-124-442-2887</div>
            <div class="module-1__adress-item">
                <i class="fas fa-location-arrow module-1__adress-item-icon"></i>
                wave@qodeinteractive.com</div>
            <div class="module-1__adress-item">
                <i class="fas fa-map-marker-alt module-1__adress-item-icon"></i>
                184 Main Collins Street Victoria 8007</div>
        </div>
	</div>
	<!-- End: Module 1 -->
	<!-- Module 2 -->
		<div class="module-2">
		<div class="module-2__title">
		<a href="#" class="module-2__title-link">BOOK TODAY</a>
		</div>
		<ul class="module-2__list module-2__list--first">
			<li class="module-2__list-item module-2__list-item--changeColor">
				<a href="#" class="module-2__list-link module-2__list-link--changeColor">HOME</a>
				<ul class="module-2__list-menu">
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/" class="module-2__list-menu-link module-2__list-menu-link--color">Surfing Home</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Shop Home</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Yachting Home</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Canoeing Home</a>
					</li>
				</ul>
			</li>
			<li class="module-2__list-item">
				<a href="#" class="module-2__list-link">PAGES</a>
				<ul class="module-2__list-menu">
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/about-us" class="module-2__list-menu-link">About Us</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/our-crew" class="module-2__list-menu-link">Our Crew</a>
					</li>
					<li class="module-2__list-menu-item module-2__list-menu-item-menuTwoLevel">
						<a href="#" class="module-2__list-menu-link module-2__list-menu-link-arrow">Our Services
						<i class="fas fa-arrow-right module-2__list-menu-icon"></i>
						</a>
						<ul class="module-2__list-menu">
							<li class="module-2__list-menu-item">
								<a href="http://localhost/CMS/wordpress/services" class="module-2__list-menu-link">Event List</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="http://localhost/CMS/wordpress/services-surfing/" class="module-2__list-menu-link">Event Single</a>
							</li>
						</ul>
					</li>
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/locations/" class="module-2__list-menu-link">Location</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/contact-us/" class="module-2__list-menu-link">Contact Us</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/error-page/" class="module-2__list-menu-link">404 Error Page</a>
					</li>
				</ul>
			</li>
			<li class="module-2__list-item">
				<a href="#" class="module-2__list-link">EVENTS</a>
				<ul class="module-2__list-menu">
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/event-list/" class="module-2__list-menu-link">Event List</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="http://localhost/CMS/wordpress/event-single/" class="module-2__list-menu-link">Event Single</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="module-2__img">
			<a href="#" class="module-2__img-link">
				<img class="module-2__img-link-img" src="<?php echo get_template_directory_uri(); ?>/images/wave-logo-standard-black.png" alt="Wave">
			</a>
		</div>
		<ul class="module-2__list module-2__list--last">
			<li class="module-2__list-item">
				<a href="#" class="module-2__list-link">SHOP</a>
				<ul class="module-2__list-menu">
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Product List</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Product Single</a>
					</li>
					<li class="module-2__list-menu-item module-2__list-menu-item-menuTwoLevel">
						<a href="" class="module-2__list-menu-link module-2__list-menu-link-arrow">Shop Page
						<i class="fas fa-arrow-right module-2__list-menu-icon"></i>
						</a>
						<ul class="module-2__list-menu">
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">My Acccount</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Cart</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Checkout</a>
							</li>
						</ul>
					</li>
					<li class="module-2__list-menu-item module-2__list-menu-item-menuTwoLevel">
						<a href="" class="module-2__list-menu-link module-2__list-menu-link-arrow">Shop Layouts
						<i class="fas fa-arrow-right module-2__list-menu-icon"></i>
						</a>
						<ul class="module-2__list-menu">
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">3 Columns</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">4 Columns</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Full Width</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="module-2__list-item">
				<a href="#" class="module-2__list-link">BLOG</a>
				<ul class="module-2__list-menu">
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Right Sidebar</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Left Sidebar</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">No Sidebar</a>
					</li>
					<li class="module-2__list-menu-item">
						<a href="" class="module-2__list-menu-link">Masonry</a>
					</li>
					<li class="module-2__list-menu-item module-2__list-menu-item-menuTwoLevel">
						<a href="" class="module-2__list-menu-link module-2__list-menu-link-arrow">Single Types
						<i class="fas fa-arrow-right module-2__list-menu-icon"></i>
						</a>
						<ul class="module-2__list-menu">
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Standard Post</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">No Sidebar Post</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Gallery Post</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Quote Post</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Link Post</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Audio Post</a>
							</li>
							<li class="module-2__list-menu-item">
								<a href="" class="module-2__list-menu-link">Video Post</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="module-2__list-item">
				<a href="#" class="module-2__list-link">LANDING</a>
			</li>
		</ul>
		<div class="module-2__search">
			<i class="fas fa-search module-2__search-icon"></i>
			<span class="module-2__search-icon-text">SEARCH</span> 
		</div>
		<div class="module-2__imageryCricle">
			<i class="fas fa-water flexbox module-2__imageryCricle-icon"></i>
		</div>
		<div class="modal">
			<div class="modal__overlay"></div>
			<div class="modal__body">
				<div class="modal__body-header">
					<img class="modal__body-header-img" src="<?php echo get_template_directory_uri(); ?>/images/wave-logo-standard-black.png" alt="Wave">
					<i class="fas fa-times modal__body-header-icon"></i>
				</div>
				<div class="modal__body-body">
					<div class="modal__body-body-title">
						<h3 class="modal__body-body-title-heading">TELL ME MORE</h3>
						<p class="modal__body-body-title-text">Make a splash with WaveRide, designed for everyone passionate about all things surfing.</p>
					</div>
					<div class="modal__body-body-address">
						<div class="modal__body-body-address-item">
						<i class="fas fa-mobile-alt  modal__body-body-address-item-icon"></i>
						156-677-124-442-2887</div>
					<div class="modal__body-body-address-item">
						<i class="fas fa-location-arrow modal__body-body-address-item-icon"></i>
						wave@qodeinteractive.com</div>
					<div class="modal__body-body-address-item">
						<i class="fas fa-map-marker-alt modal__body-body-address-item-icon"></i>
						184 Main Collins Street Victoria 8007</div>
						</div>
					<span class="modal__body-body__info-title">
						Follow Us:
						<a href="#" class="modal__body-body__info-link">
							<i class="fab fa-twitter modal__body-body__info-icon"></i>
						</a>
						<a href="#" class="modal__body-body__info-link">
							<i class="fab fa-facebook-f modal__body-body__info-icon"></i>
						</a>
						<a href="#" class="modal__body-body__info-link"><i class="fab fa-instagram modal__body-body__info-icon"></i></a>
						<a href="#" class="modal__body-body__info-link"><i class="fab fa-linkedin-in modal__body-body__info-icon"></i></a>
					</span>
				</div>
				
			</div>
			
		</div>
	</div>
	<!-- End: Module 2 -->
</div>
    
</header><!-- #masthead -->

<?php /*
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);*/
		?>
