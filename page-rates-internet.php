<?php
/**
 * Template Name: Интернет тарифы
 */
get_header();
?>

<?php get_template_part( 'partials/navigation'); ?>

<?php get_template_part( 'partials/break-news'); ?>

    <header class="header">
        <div class="container">
            <h1 class="page-title-h1"><?php the_title(); ?></h1>
            <div class="features-subtitle"><?php the_content(); ?></div>
        </div>
    </header>

    <main class="main">

	    <!-- internet -->
        <section class="rate-section">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Интернет</h1>
                </div>
            </div>
            <div class="container">

                <?php
                    $rates_internet = get_field('rates-internet-internet');
                    foreach ( $rates_internet as $rate ) :
                        $id = $rate->ID;
                        $title = $rate->post_title;
                        $rate_title = get_field('rate-internet-title', $id);
                        $content = $rate->post_content;
                        $category = get_the_terms( $id, 'category_rate' )[0]->name;
                        $cost = get_field('rate-internet-cost', $id);
                        $speed = get_field('rate-internet-speed', $id);
                        $speed_unit = get_field('rate-internet-speed-unit', $id);
                        $show_button =  get_field('rate-button-toggle', $id);
                        $rate_button_spoiler_text =  get_field('rate-button-spoiler-text', $id);
                ?>

                        <div class="rate-content">
                            <!-- label -->
                            <?php
                                if (get_field('rate-label-toggle', $id)) : ?>
                                <div class="rate-label">
                                    <div class="rate-label-content">
                                        <?php the_field('rate-label-text', $id); ?>
                                    </div>
                                </div>
                            <?php endif; ?>


                            <div class="wrap-rate-row">
                                <div class="rate-row">
                                    <div class="rate-wrap-title">
                                        <h2 class="rate-title-h2 ico-wifi"><?php echo $rate_title;?></h2>
                                    </div>
                                    <div class="rate-wrap-name">
                                        <div class="rate-name"><?php echo $title;?></div>
                                        <div class="rate-name-description"><?php echo $cost;?></div>
                                    </div>
                                    <div class="rate-cricle">
                                        <div class="circle-content"><?php echo $speed;?><br><span class="speed-small-text"><?php echo $speed_unit;?></span></div>
                                    </div>
                                </div>
                                <div data-w-id="af6ba63e-4606-8d7e-8a20-77e05404ecdf" class="wrap-button-spoiler">
                                    <?php $button_text = !$rate_button_spoiler_text ? "Выбрать" : $rate_button_spoiler_text; ?>
                                    <div style="color:rgb(20,26,37)" class="button-spoiler-text"><?php echo $button_text; ?></div>
                                    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0)" class="button-spoiler-toggle"></div>
                                </div>
	                            <!-- spoiler -->
                                <div style="height:0px" class="rate-spoiler">
                                    <div class="rate-spoiler-content">

	                                    <!-- spoiler card -->
                                        <?php if (!$show_button) : ?>
                                        <div class="rate-spoiler-cards">
	                                        <?php for ($i = 1; $i <= 4; $i++) : ?>
	                                        <?php
                                                $subscription_time = get_field("subscription-time$i", $id);
                                                $subscription_description = get_field("subscription-description$i", $id);
                                                $subscription_label_toggle = get_field("subscription-label-toggle$i", $id);
                                                $subscription_label_text = get_field("subscription-label-text$i", $id);
	                                        ?>
		                                        <div class="rate-card">
			                                        <div class="rate-card-header ico-date">
				                                        <h4 class="rate-card-title"><?php echo $subscription_time;?></h4>
			                                        </div>
			                                        <div class="rate-card-body">
				                                        <div><?php echo $subscription_description; ?></div>
			                                        </div>
			                                        <div class="rate-card-footer">
				                                        <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $title . ' - ' . $subscription_time;?>" data-w-id="14dd45ae-b76c-6e7f-960c-a1d9d227f6d8" class="wrap-white-button">
					                                        <div class="white-button-text">Подключить</div>
					                                        <div class="white-button-background"></div>
				                                        </div>
			                                        </div>
			                                        <?php if ($subscription_label_toggle) : ?>
			                                            <div class="card-label"><?php echo $subscription_label_text;?></div>
		                                            <?php endif; ?>
		                                        </div>
	                                        <?php endfor; ?>
                                        </div>
                                        <?php endif;?>

	                                    <!-- rate content -->
                                        <div class="rate-spoiler-description">
                                            <div class="rate-spoiler-description-content">
	                                            <?php echo $content; ?>
                                            </div>
                                        </div>

	                                    <!-- rate button -->
	                                    <?php if ($show_button) : ?>
	                                        <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $title;?>" data-w-id="cd9c9ade-52b7-99c1-94c6-0f5a9bc9ad92" class="wrap-white-button">
	                                            <div class="white-button-background"></div>
	                                            <div class="white-button-text">Подключить</div>
	                                        </div>
                                        <?php endif;?>

                                    </div>
                                </div>
                            </div>
                            <div class="rate-devision"></div>
                        </div>


                <?php endforeach; ?>
            </div>
        </section>

	    <!-- internet + tv -->
	    <section class="rate-section rate-section-internet-tv">
		    <div class="wrap-section-title">
			    <div class="container">
				    <h1 class="section-title-h1">Интернет и цифровое телевидение</h1>
				    <small></small>
			    </div>
		    </div>
		    <div class="container">

                <?php
                $rates_internet = get_field('rates-internet-internet-tv');
                foreach ( $rates_internet as $rate ) :
                    $id = $rate->ID;
                    $title = $rate->post_title;
                    $rate_title = get_field('rate-internet-title', $id);
                    $content = $rate->post_content;
                    $category = get_the_terms( $id, 'category_rate' )[0]->name;
                    $cost = get_field('rate-internet-cost', $id);
                    $speed = get_field('rate-internet-speed', $id);
                    $speed_unit = get_field('rate-internet-speed-unit', $id);
                    $show_button =  get_field('rate-button-toggle', $id);
                    $rate_button_spoiler_text =  get_field('rate-button-spoiler-text', $id);
                    ?>

				    <div class="rate-content">
					    <!-- label -->
                        <?php
                        if (get_field('rate-label-toggle', $id)) : ?>
						    <div class="rate-label">
							    <div class="rate-label-content">
                                    <?php the_field('rate-label-text', $id); ?>
							    </div>
						    </div>
                        <?php endif; ?>


					    <div class="wrap-rate-row">
						    <div class="rate-row">
							    <div class="rate-wrap-title">
								    <h2 class="rate-title-h2 ico-wifi"><?php echo $rate_title;?></h2>
							    </div>
							    <div class="rate-wrap-name">
								    <div class="rate-name"><?php echo $title;?></div>
								    <div class="rate-name-description"><?php echo $cost;?></div>
							    </div>
							    <div class="rate-cricle">
								    <div class="circle-content"><?php echo $speed;?><br><span class="speed-small-text"><?php echo $speed_unit;?></span></div>
							    </div>
						    </div>
						    <div data-w-id="af6ba63e-4606-8d7e-8a20-77e05404ecdf" class="wrap-button-spoiler">
                                <?php $button_text = !$rate_button_spoiler_text ? "Выбрать" : $rate_button_spoiler_text; ?>
							    <div style="color:rgb(20,26,37)" class="button-spoiler-text"><?php echo $button_text; ?></div>
							    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0)" class="button-spoiler-toggle"></div>
						    </div>
						    <!-- spoiler -->
						    <div style="height:0px" class="rate-spoiler">
							    <div class="rate-spoiler-content">

								    <!-- spoiler card -->
                                    <?php if (!$show_button) : ?>
									    <div class="rate-spoiler-cards">
                                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                <?php
                                                $subscription_time = get_field("subscription-time$i", $id);
                                                $subscription_description = get_field("subscription-description$i", $id);
                                                $subscription_label_toggle = get_field("subscription-label-toggle$i", $id);
                                                $subscription_label_text = get_field("subscription-label-text$i", $id);
                                                ?>
											    <div class="rate-card">
												    <div class="rate-card-header ico-date">
													    <h4 class="rate-card-title"><?php echo $subscription_time;?></h4>
												    </div>
												    <div class="rate-card-body">
													    <div><?php echo $subscription_description; ?></div>
												    </div>
												    <div class="rate-card-footer">
													    <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $title . ' - ' . $subscription_time;?>" data-w-id="14dd45ae-b76c-6e7f-960c-a1d9d227f6d8" class="wrap-white-button">
														    <div class="white-button-text">Подключить</div>
														    <div class="white-button-background"></div>
													    </div>
												    </div>
                                                    <?php if ($subscription_label_toggle) : ?>
													    <div class="card-label"><?php echo $subscription_label_text;?></div>
                                                    <?php endif; ?>
											    </div>
                                            <?php endfor; ?>
									    </div>
                                    <?php endif;?>

								    <!-- rate content -->
								    <div class="rate-spoiler-description">
									    <div class="rate-spoiler-description-content">
                                            <?php echo $content; ?>
									    </div>
								    </div>

								    <!-- rate button -->
                                    <?php if ($show_button) : ?>
									    <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $title;?>" data-w-id="cd9c9ade-52b7-99c1-94c6-0f5a9bc9ad92" class="wrap-white-button">
										    <div class="white-button-background"></div>
										    <div class="white-button-text">Подключить</div>
									    </div>
                                    <?php endif;?>

							    </div>
						    </div>
					    </div>
					    <div class="rate-devision"></div>
				    </div>


                <?php endforeach; ?>
		    </div>
	    </section>

	    <!-- internet + tv + cinema -->
	    <section class="rate-section rate-section-internet-tv-cinema">
		    <div class="wrap-section-title">
			    <div class="container">
				    <h1 class="section-title-h1">Интернет + ТВ + on-line кинотеатр со скидкой</h1>
			    </div>
		    </div>
		    <div class="container">

                <?php
                $rates_internet = get_field('rates-internet-internet-tv-discount');
                foreach ( $rates_internet as $rate ) :
                    $id = $rate->ID;
                    $title = $rate->post_title;
                    $rate_title = get_field('rate-internet-title', $id);
                    $content = $rate->post_content;
                    $category = get_the_terms( $id, 'category_rate' )[0]->name;
                    $cost = get_field('rate-internet-cost', $id);
                    $speed = get_field('rate-internet-speed', $id);
                    $speed_unit = get_field('rate-internet-speed-unit', $id);
                    $show_button =  get_field('rate-button-toggle', $id);
                    $rate_button_spoiler_text =  get_field('rate-button-spoiler-text', $id);
                    ?>

				    <div class="rate-content">
					    <!-- label -->
                        <?php
                        if (get_field('rate-label-toggle', $id)) : ?>
						    <div class="rate-label">
							    <div class="rate-label-content">
                                    <?php the_field('rate-label-text', $id); ?>
							    </div>
						    </div>
                        <?php endif; ?>


					    <div class="wrap-rate-row">
						    <div class="rate-row">
							    <div class="rate-wrap-title">
								    <h2 class="rate-title-h2 ico-wifi"><?php echo $rate_title;?></h2>
							    </div>
							    <div class="rate-wrap-name">
								    <div class="rate-name"><?php echo $title;?></div>
								    <div class="rate-name-description"><?php echo $cost;?></div>
							    </div>
							    <div class="rate-cricle">
								    <div class="circle-content"><?php echo $speed;?><br><span class="speed-small-text"><?php echo $speed_unit;?></span></div>
							    </div>
						    </div>
						    <div data-w-id="af6ba63e-4606-8d7e-8a20-77e05404ecdf" class="wrap-button-spoiler">
                                <?php $button_text = !$rate_button_spoiler_text ? "Выбрать" : $rate_button_spoiler_text; ?>
							    <div style="color:rgb(20,26,37)" class="button-spoiler-text"><?php echo $button_text; ?></div>
							    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0DEG) skew(0, 0)" class="button-spoiler-toggle"></div>
						    </div>
						    <!-- spoiler -->
						    <div style="height:0px" class="rate-spoiler">
							    <div class="rate-spoiler-content">

								    <!-- spoiler card -->
                                    <?php if (!$show_button) : ?>
									    <div class="rate-spoiler-cards">
                                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                <?php
                                                $subscription_time = get_field("subscription-time$i", $id);
                                                $subscription_description = get_field("subscription-description$i", $id);
                                                $subscription_label_toggle = get_field("subscription-label-toggle$i", $id);
                                                $subscription_label_text = get_field("subscription-label-text$i", $id);
                                                ?>
											    <div class="rate-card">
												    <div class="rate-card-header ico-date">
													    <h4 class="rate-card-title"><?php echo $subscription_time;?></h4>
												    </div>
												    <div class="rate-card-body">
													    <div><?php echo $subscription_description; ?></div>
												    </div>
												    <div class="rate-card-footer">
													    <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $title . ' - ' . $subscription_time;?>" data-w-id="14dd45ae-b76c-6e7f-960c-a1d9d227f6d8" class="wrap-white-button">
														    <div class="white-button-text">Подключить</div>
														    <div class="white-button-background"></div>
													    </div>
												    </div>
                                                    <?php if ($subscription_label_toggle) : ?>
													    <div class="card-label"><?php echo $subscription_label_text;?></div>
                                                    <?php endif; ?>
											    </div>
                                            <?php endfor; ?>
									    </div>
                                    <?php endif;?>

								    <!-- rate content -->
								    <div class="rate-spoiler-description">
									    <div class="rate-spoiler-description-content">
                                            <?php echo $content; ?>
									    </div>
								    </div>

								    <!-- rate button -->
                                    <?php if ($show_button) : ?>
									    <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $title;?>" data-w-id="cd9c9ade-52b7-99c1-94c6-0f5a9bc9ad92" class="wrap-white-button">
										    <div class="white-button-background"></div>
										    <div class="white-button-text">Подключить</div>
									    </div>
                                    <?php endif;?>

							    </div>
						    </div>
					    </div>
					    <div class="rate-devision"></div>
				    </div>


                <?php endforeach; ?>
		    </div>
	    </section>


    </main>

<?php get_footer(); ?>