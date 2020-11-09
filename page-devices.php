<?php
/**
 * Template Name: Оборудование
 */
get_header();
?>

<?php get_template_part( 'partials/navigation'); ?>

<?php get_template_part( 'partials/break-news'); ?>

    <header class="header header-contact">
        <div class="container">
            <h1 class="page-title-h1"><?php the_title(); ?></h1>
            <div class="features-subtitle"><?php the_content(); ?></div>
        </div>
    </header>

    <main class="main">

	    <section class="product-section">
		    <div class="wrap-section-title">
			    <div class="container">
				    <h1 class="section-title-h1">Покупка и аренда</h1>
			    </div>
		    </div>
		    <div class="container">
                <?php if( have_rows('devices-list') ): ?>

                        <?php while( have_rows('devices-list') ): the_row();
                            $label_toggle = get_sub_field('device-label-toggle');
                            $type = get_sub_field('type');
                            $name = get_sub_field('name');
                            $cost_buy = get_sub_field('cost-buy');
                            $cost_rent = get_sub_field('cost-rent');
                            $in_stock = get_sub_field('stock');
                            $short_description = get_sub_field('short-description');
                            $description= get_sub_field('description');
                            $image = get_sub_field('image');
                        ?>
	                        <?php if (!get_sub_field('show')) : ?>

				                <div class="product-content">
					                <!-- label -->
		                            <?php if ($label_toggle) : ?>
						                <div class="rate-label">
							                <div class="rate-label-content">
		                                        <?php echo get_sub_field('device-label'); ?>
							                </div>
						                </div>
		                            <?php endif; ?>
				                    <!-- device row -->
					                <div class="wrap-rate-row">
						                <div class="product-row">
							                <div class="product-wrap-image">
								                <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $name; ?>" class="product-image">
							                </div>
							                <div class="peoduct-wrap-description">
								                <div class="product-name">
									                <div class="product-type"><?php echo $type; ?></div>
									                <div class="product-vendor"><?php echo $name; ?></div>
								                </div>
								                <div class="product-description">
									                <div><?php echo $short_description; ?></div>
									                <?php if ($in_stock) : ?>
									                    <div class="product-availability">в наличии</div>
													<?php else :?>
														<div class="product-availability product-not-availability">нет в наличии</div>
													<?php endif; ?>
								                </div>

								                <!-- product buttons -->
			                                    <?php if ($cost_rent !== '') : ?>
								                <div class="product-buttons">
									                <div data-modal="big-form" data-modal-title="<?php echo $name; ?>" data-modal-subtitle="<?php echo 'Купить за ' . $cost_buy . ' руб.';?>"  data-w-id="0407f263-9c2c-1914-6a4e-d030f0a18948" class="wrap-white-button button-full-width">
										                <div class="white-button-text">Купить за <?php echo $cost_buy; ?> руб.</div>
										                <div class="white-button-background"></div>
									                </div>

									                <div data-modal="big-form" data-modal-title="<?php echo $name; ?>" data-modal-subtitle="<?php echo 'Аренда за ' . $cost_rent . ' рублей в месяц';?>" data-w-id="9905d26e-749c-3bc2-31cb-e39d814f02d0" class="wrap-white-button button-full-width">
										                <div class="white-button-text">Аренда <?php echo $cost_rent; ?>р/мес</div>
										                <div class="white-button-background"></div>
									                </div>
								                </div>
												<?php else: ?>
													<div class="product-buttons product-buttons-center">
														<div data-modal="big-form" data-modal-title="<?php echo $name; ?>" data-modal-subtitle="<?php echo 'Купить за ' . $cost_buy . ' руб.';?>"  data-w-id="0407f263-9c2c-1914-6a4e-d030f0a18948" class="wrap-white-button button-full-width">
															<div class="white-button-text">Купить за <?php echo $cost_buy; ?> руб.</div>
															<div class="white-button-background"></div>
														</div>
													</div>
			                                    <?php endif; ?>
							                </div>
						                </div>
						                <div data-w-id="5d87fa34-870a-0ed4-339b-c1867a322bec" class="button-product-spoiler">Характеристики</div>
						                <div style="height:0PX" class="rate-spoiler">
							                <div class="product-spoiler-content">
								                <div class="rate-spoiler-description">
									                <div class="rate-spoiler-description-content"><?php echo $description; ?> </div>
								                </div>
							                </div>
						                </div>
					                </div>
				                </div>

	                        <?php endif; ?>

                        <?php endwhile; ?>

                <?php endif; ?>

		    </div>
	    </section>

    </main>

<?php get_footer(); ?>