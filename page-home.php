<?php
/**
 * Template Name: Главная страница
 */
get_header();
?>

<?php get_template_part( 'partials/navigation'); ?>

<?php get_template_part( 'partials/break-news'); ?>

    <header class="hero">
        <?php get_template_part( 'partials/slider'); ?>
    </header>

    <main class="main">

        <!-- options -->
        <section class="options">
            <div class="container">
                <div class="options-content">
                    <div class="option-card">
                        <?php
	                        $card_title = get_field('internet-title');
	                        $card_cost = get_field('internet-cost');
	                        $card_speed = get_field('internet-speed');
	                        $card_speed_unit = get_field('internet-speed-unit');
	                        $modal_subtitle = "$card_speed $card_speed_unit, $card_cost";
                        ?>
                        <div class="option-card-header">
                            <h2 class="option-card-title ico-wifi"><?php echo $card_title; ?></h2>
                        </div>
                        <div class="option-card-body">
                            <div class="option-card-cricle">
                                <div class="circle-content"><?php echo $card_speed; ?> <span class="speed-small-text"><?php echo $card_speed_unit; ?></span></div>
                            </div>
                            <div class="option-card-cost"><?php echo $card_cost;?></div>
                        </div>
                        <div class="option-card-footer">
                            <div data-modal="big-form" data-modal-title="<?php echo $card_title; ?>" data-modal-subtitle="<?php echo str_replace("<br>", "", $modal_subtitle); ?>" data-w-id="46722dfd-2e3d-c4ad-e59a-da3df5dbae6b" class="wrap-white-button">
                                <div class="white-button-text" >Подключить</div>
                                <div class="white-button-background"></div>
                            </div>
                        </div>
                        <?php if (get_field('internet-label-toggle')) : ?>
                            <div class="option-card-label"><?php the_field('internet-label-text'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="option-card">
                        <?php
	                        $card_title = get_field('tv-title');
	                        $card_cost = get_field('tv-cost');
                            $card_info_button_name = get_field('tv-info');
	                        $modal_subtitle = "$card_cost";
                        ?>
                        <div class="option-card-header">
                            <h2 class="option-card-title ico-tv"><?php echo $card_title; ?></h2>
                        </div>
                        <div class="option-card-body">
                            <div class="option-card-square">
                                <div class="square-content">tv</div>
                            </div>
                            <div class="option-card-cost"><?php echo $card_cost; ?></div>
                        </div>
                        <div data-w-id="a9246bca-e37b-0317-1f6c-92cee3d4fda6" class="small ico-info" data-modal="some-content" data-modal-title="<?php echo $card_info_button_name; ?>" data-modal-subtitle="" data-modal-content='<?php the_field('tv-content');?>'><?php echo $card_info_button_name; ?></div>
                        <div class="option-card-footer">
                            <div data-modal="big-form" data-modal-title="<?php echo $card_title; ?>" data-modal-subtitle="<?php echo str_replace("<br>", "", $modal_subtitle); ?>" data-modal-content="" data-w-id="0099c16e-f62b-0474-3fb1-5e8a46a3a5a7" class="wrap-white-button">
                                <div class="white-button-text">Подключить</div>
                                <div class="white-button-background"></div>
                            </div>
                        </div>
                        <?php if (get_field('tv-label-toggle')) : ?>
                            <div class="option-card-label"><?php the_field('tv-label-text'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="option-card">
                        <?php
	                        $card_title = get_field('internet-tv-title');
	                        $card_cost = get_field('internet-tv-cost');
	                        $card_speed = get_field('internet-tv-speed');
	                        $card_speed_unit = get_field('internet-tv-speed-unit');
	                        $card_info_button_name = get_field('internet-tv-info');
	                        $modal_subtitle = "$card_cost $card_speed $card_speed_unit";

                        ?>
                        <div class="option-card-header">
                            <h2 class="option-card-title ico-sale"><?php echo $card_title; ?></h2>
                        </div>
                        <div class="option-card-body">
                            <div class="option-card-cricle">
                                <div class="circle-content"><?php echo $card_speed;?> <span class="speed-small-text"><?php echo $card_speed_unit;?></span></div>
                            </div>
                            <div class="option-card-cost"><?php echo $card_cost;?></div>
                            <div data-w-id="de199e9b-a6a1-6f4b-180d-37f72b644319" class="small ico-info" data-modal="some-content" data-modal-title="<?php echo $card_info_button_name; ?>"  data-modal-subtitle="" data-modal-content='<?php the_field('internet-tv-content');?>'><?php echo $card_info_button_name; ?></div>
                        </div>
                        <div class="option-card-footer">
                            <div data-modal="big-form" data-modal-title="<?php echo $card_title; ?>" data-modal-subtitle="<?php echo str_replace("<br>", "", $modal_subtitle); ?>" data-w-id="bde2c6cf-9fc4-1114-ff58-bc85f37a0396" class="wrap-white-button">
                                <div class="white-button-text">Подключить</div>
                                <div class="white-button-background"></div>
                            </div>
                        </div>
                        <?php if (get_field('internet-tv-label-toggle')) : ?>
		                    <div class="option-card-label"><?php the_field('internet-tv-label-text'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="option-extra">
                <div class="container">
                    <h2 class="block-title">Дополнительные сервисы</h2>
                    <div class="wrap-extra-options-content">
	                    <a href="<?php the_field('devices-link'); ?>" class="exctra-option-card ico-device w-inline-block">
		                    <div class="extra-option-text">Оборудование + Wi-FI</div>
		                    <div class="wrap-arrow-button">
			                    <div class="white-button-arrow">→</div>
		                    </div>
	                    </a>

	                    <a href="<?php the_field('service-link'); ?>" class="exctra-option-card ico-tech w-inline-block">
		                    <div class="extra-option-text">сервис-центр</div>
		                    <div class="wrap-arrow-button">
			                    <div class="white-button-arrow">→</div>
		                    </div>
	                    </a>

	                    <a href="<?php the_field('data-center-link'); ?>" class="exctra-option-card ico-datacenter w-inline-block">
		                    <div class="extra-option-text">Дата-центр</div>
		                    <div class="wrap-arrow-button">
			                    <div class="white-button-arrow">→</div>
		                    </div>
	                    </a>
                    </div>
                </div>
            </div>
        </section>

	    <!-- discounts-posts -->
	    <section class="home-posts home-discounts-posts">
		    <div class="container">
			    <div class="wrap-discount-title">
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
				    <h2 class="block-title">Акции</h2>
			    </div>

			    <div class="wrap-home-posts">
                    <?php get_template_part( 'partials/index-discounts-card'); ?>
			    </div>
			    <div class="wrap-button-center">
				    <a href="discounts" class="wrap-white-button w-inline-block">
					    <div class="white-button-text">Все акции</div>
				    </a>
			    </div>
		    </div>
	    </section>

        <!-- payment -->
        <section class="payment">
            <div class="container">
                <h2 class="block-title">Оплата</h2>
                <div data-duration-in="500" data-duration-out="200" data-easing="ease-in-out" class="wrap-payment-content w-tabs">

	                <div class="tabs-menu w-tab-menu"><a data-w-tab="Tab 1" class="tab-link w-inline-block w-tab-link w--current"><div class="tab-link-content ico-payment1">Оплата в личном кабинете</div></a><a data-w-tab="Tab 2" class="tab-link w-inline-block w-tab-link"><div class="tab-link-content ico-payment2">Онлайн оплата</div></a><a data-w-tab="Tab 3" class="tab-link w-inline-block w-tab-link"><div class="tab-link-content ico-payment3">Другие способы оплаты</div></a></div>

                    <div class="tabs-content w-tab-content">
                        <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                            <div class="tab-content"><?php the_field('payment-personal-area'); ?></div>
                        </div>
                        <div data-w-tab="Tab 2" class="w-tab-pane">
                            <div class="tab-content"><?php the_field('payment-online'); ?></div>
                        </div>
                        <div data-w-tab="Tab 3" class="w-tab-pane">
                            <div class="tab-content"><?php the_field('payment-other-methods'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- home-posts -->
        <section class="home-posts">
            <div class="container">
                <h2 class="block-title">Новости</h2>
                <div class="wrap-home-posts">
                    <?php get_template_part( 'partials/index-news-card'); ?>
                </div>
                <div class="wrap-button-center">
	                <a href="news" class="wrap-white-button w-inline-block">
		                <div class="white-button-text">Все новости</div>
	                </a>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>