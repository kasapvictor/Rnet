<div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="5525709d-b9b1-0397-0721-57a8f743d173" role="banner" class="w-nav">
	<nav id="navigation" class="nav-wrap-content">
		<div class="container container-nav w-container">
			<a href="/" aria-current="page" class="brand w-nav-brand w--current">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/5f9001b8aeb3fb3c95ebec48_logo.svg" loading="lazy" alt="" class="logo">
			</a>
            <?php
	            $args = [
	                    'theme_location'        => 'header_menu',
                        'container'             => false,
		                'items_wrap'            => '<ul id="%1$s" role="navigation" class="%2$s">%3$s</ul>',
		                'menu_class'            => 'nav-menu w-nav-menu',
				];
                wp_nav_menu( $args );
            ?>
			<div class="nav-links">
				<a href="tel:<?php the_field('header-phone', 'option');?>" class="navlink navlink-phone w-nav-link"><?php the_field('header-phone', 'option');?></a>
				<a href="<?php the_field('link-login', 'option');?>" target="_blank" class="navlink navlink-login w-nav-link">Личный кабинет</a>
			</div>
			<div class="menu-button w-nav-button"></div>
		</div>
	</nav>
</div>

