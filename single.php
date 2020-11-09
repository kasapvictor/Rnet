<?php  get_header(); ?>
	
	<?php get_template_part( 'partials/navigation'); ?>

	<?php get_template_part( 'partials/break-news'); ?>

	<?php $image = get_field('discount-image'); ?>

    <header class="header post-header">

        <div class="container">
			<?php if ($image !== null) : ?>
				<div class="wrap-post-discount-title">
					<div class="svg-ico">
						<svg xmlns="http://www.w3.org/2000/svg" width="45" height="51" viewBox="0 0 45 51" fill="none">
							<g filter="url(#filter0_d)">
								<path d="M37.9184 21.4621L37.8919 21.361C33.9957 9.68652 22.3865 1.39823 21.8928 1.05286L20.3943 0L20.4913 1.7688C20.4913 1.84468 20.7645 8.70108 13.8095 14.4035C6.25515 20.6029 6.29914 25.7157 6.31685 28.4617L6.32579 28.8407C6.32579 36.3288 12.0767 41.9277 20.3044 42.8507C19.8565 42.7835 19.399 42.6962 18.9399 42.5621C16.2865 41.7787 14.7352 40.0015 14.4354 37.4407L14.365 36.9354C14.1269 34.956 13.8184 32.5048 18.3492 27.8552C20.0417 26.1201 21.5138 24.2501 22.7303 22.3043L23.3385 21.3274L24.1406 22.1696C26.5383 24.6712 28.3718 27.1981 29.6058 29.6577C30.7429 31.8309 30.8135 35.2676 30.7253 36.0004C30.2934 39.7403 27.4638 42.5283 23.6734 42.9326C23.4263 42.9595 23.0565 42.9856 22.6037 42.9953C22.6435 42.9955 22.6814 42.9999 22.7214 42.9999C31.6773 42.9999 38.6852 36.1182 38.6852 27.3329C38.6852 25.2273 37.9448 21.6137 37.9184 21.4621Z" fill="#00BDFF"/>
							</g>
							<defs>
								<filter id="filter0_d" x="-4" y="0" width="53" height="51" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix"/>
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
									<feOffset dy="4"/>
									<feGaussianBlur stdDeviation="2"/>
									<feColorMatrix type="matrix" values="0 0 0 0 0.447059 0 0 0 0 0.854902 0 0 0 0 1 0 0 0 1 0"/>
									<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
									<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
								</filter>
							</defs>
						</svg>
					</div>
					<h1 class="page-title-h1 post-title"><?php the_title(); ?></h1>
				</div>
			<?php else : ?>
				<div class="wrap-posts-title">
					<h1 class="page-title-h1 post-title"><?php the_title(); ?></h1>
				</div>
			<?php endif; ?>
        </div>
    </header>

    <main class="main post-main">
        <div class="container ">
            <article class="post-content">
	            <?php if ($image !== null) : ?>
		                <div class="post-background-thumb" style="background-image: url('<?php echo $image; ?>')"></div>
	            <?php else : ?>
		                <div class="post-background-thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                <?php endif; ?>

	            <time class="post-date" datetime="<?php echo get_the_date(); ?>" class="post-date"><?php echo get_the_date(); ?></time>
                <div class="article-content"> <?php the_content();?> </div>
            </article>

	        <br>
	        <hr>

		        <?php if ($image !== null) : ?>
		        <a href="/discounts" class="wrap-white-button w-inline-block">
			        <div class="white-button-text">Все Акции</div>
		        </a>
				<?php else: ?>
	            <a href="/news" class="wrap-white-button w-inline-block">
					<div class="white-button-text">Все новости</div>
	            </a>
			<?php endif; ?>


        </div>

    </main>

<?php get_footer(); ?>