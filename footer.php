		<footer class="footer">
			<div class="container">
				<div class="footer-content">
					<div class="footer-about">
						<img src="<?= get_template_directory_uri(); ?>/assets/images/5f9001b8aeb3fb3c95ebec48_logo.svg"
						     loading="lazy" alt="<?= get_bloginfo(); ?>" class="logo">
						<div class="footer-about-text">
							<?php the_field('footer-info', 'option');?>,
							<br>
							18+ © Rnet <?= date('Y');?>
						</div>
					</div>

                    <?php
                    // футер меню 1
	                $args = [
	                    'theme_location'        => 'footer_menu_1',
	                    'container'             => false,
	                    'items_wrap'            => '<ul id="%1$s" role="navigation" class="%2$s">%3$s</ul>',
	                    'menu_class'            => 'footer-links',
	                ];
	                wp_nav_menu( $args );
                ?>
				
                    <?php
                    // футер меню 2
	                $args = [
	                    'theme_location'        => 'footer_menu_2',
	                    'container'             => false,
	                    'items_wrap'            => '<ul id="%1$s" role="navigation" class="%2$s">%3$s</ul>',
	                    'menu_class'            => 'footer-links footer-links-order-last',
	                ];
	                wp_nav_menu( $args );
                ?>

					<div class="footer-links">
					<a href="tel:<?php the_field('footer-phone', 'option');?>" class="footer-link ico-phone"><?php the_field('header-phone', 'option');?></a>
					<a href="<?php the_field('footer-vk', 'option');?>" target="_blank"
							class="footer-link ico-vkontakte">
						<?php the_field('footer-vk-text', 'option');?>
					</a>
					<a href="mailto:<?php the_field('footer-email', 'option');?>?subject=Письмо с сайта Rnet"
							class="footer-link ico-mail">
						<?php the_field('footer-email', 'option');?>
					</a>
					<div class="footer-location"><?php the_field('footer-address', 'option');?></div>
				</div>

					<a href="https://kasapvictor.ru" target="_blank" class="webdeveloper-link" title="Kasap Victor - разработка сайтов">
						<img src="<?= get_template_directory_uri(); ?>/assets/images/k-v6.svg"
						     loading="lazy" alt="Kasap Victor - разработка сайтов" class="webdeveloper">
					</a>

				</div>
			</div>
		</footer>

		<!-- small -->
		<?php get_template_part( 'partials/modal-small-form' ); ?>

		<!-- big -->
		<?php get_template_part( 'partials/modal-big-form' ); ?>

		<!-- some content -->
		<?php get_template_part( 'partials/modal-some-content' ); ?>

		<!-- scroll to top -->
		<a href="#navigation" class="scrolltotop w-inline-block" data-w-id="3efc249f-b042-76c7-a50d-25d56e34721b"></a>

		<?php wp_footer(); ?>

		<!-- recaptcha -->
		<script src="https://www.google.com/recaptcha/api.js"></script>

		<!-- mailer -->
		<script src="<?= get_bloginfo( 'template_url' ); ?>/mailer/mail.js" type="text/javascript"></script>

		<!--[if lte IE 9]><script src="<?= get_bloginfo( 'template_url' ); ?>/assets/scripts/placeholders.min.js" type="text/javascript"></script><![endif]-->
	</body>
</html>