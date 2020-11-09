<?php
/**
 * Template Name: Телевидение тарифы
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

    <main class="main main-rates-tv">

        <!-- main tv rates -->
        <section class="rate-section rate-section-tv">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Телевидение</h1>
                </div>
            </div>
            <div class="container">
                <?php
                    $rates_tv = get_field('rates-tv');
                    foreach ( $rates_tv as $rate ) :
                        $id = $rate->ID;
                        $rate_title = $rate->post_title;
                        $rate_count_channels = get_field('rate-tv-count-channels', $id);
                        $rate_content = $rate->post_content;
                        $rate_cost = get_field('rate-tv-cost', $id);
                        $rate_toggle_label = get_field('rate-label-toggle', $id);
                    ?>

                    <div class="rate-content">

                        <?php if ($rate_toggle_label) : ?>
                        <!-- label -->
                            <div class="rate-label">
                                <div class="rate-label-content">
                                    <?php echo get_field('rate-label-text', $id); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="wrap-rate-row">
                            <div class="rate-row-tv">
                                <div class="rate-wrap-title">
                                    <h2 class="rate-title-h2 ico-tv"><?php echo $rate_title; ?></h2>
                                </div>
                                <div class="rate-wrap-name rate-name-tv">
                                    <div class="rate-name"><?php echo $rate_count_channels;?></div>
                                    <div class="rate-name-description"><?php echo $rate_cost; ?></div>
                                </div>
                                <div class="rate-square">
                                    <div class="rate-square-content">tv</div>
                                </div>
                                <div data-modal="big-form" data-modal-title="<?php echo $rate_title; ?>" data-modal-subtitle="<?php echo $rate_count_channels . ' - ' . $rate_cost;?>" data-w-id="0407f263-9c2c-1914-6a4e-d030f0a18948" class="wrap-white-button button-rate-tv">
                                    <div class="white-button-background"></div>
                                    <div class="white-button-text">Подключить</div>
                                </div>
                            </div>
                            <div style="height:0PX" class="rate-spoiler">
                                <div class="rate-spoiler-content spoiler-content-tv">
                                    <div class="rate-spoiler-description">
                                        <div class="rate-spoiler-description-content spoiler-description-tv">
                                            <?php echo $rate_content; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="5d87fa34-870a-0ed4-339b-c1867a322bec" class="button-tv-spoiler ico-info">Список каналов</div>
                            <div data-w-id="5368517e-0b46-1683-d7f8-0d9cad41b822" class="button-tv-spoiler-copy ico-tv">Список каналов</div>
                        </div>
                        <div class="rate-devision"></div>
                    </div>

                <?php endforeach; ?>
            </div>
        </section>

        <!-- extra options -->
        <section class="rate-section rate-tv-extra-options">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Дополнительные услуги</h1>
                </div>
            </div>
            <div class="container">
                <div class="tv-extra-services-content">
                    <?php if( have_rows('rates-tv-extra-options-cards') ): ?>
                            <?php while( have_rows('rates-tv-extra-options-cards') ): the_row();
                                $title = get_sub_field('rates-tv-extra-title');
                                $cost = get_sub_field('rates-tv-extra-cost');
                                $description = get_sub_field('rates-tv-extra-description');
                                $label_toggle = get_sub_field('rate-extra-label-toggle');
                                ?>
                                <div class="extra-serve-card-tv">
                                    <div class="option-card-header">
                                        <h2 class="tv-card-title ico-tv"><?php echo $title;?></h2>
                                    </div>
                                    <div class="tv-card-body">
                                        <div><?php echo $description; ?></div>
                                    </div>
                                    <div class="tv-card-cost"><?php echo $cost;?></div>
                                    <div class="option-card-footer">
                                        <div data-modal="big-form" data-modal-title="<?php echo 'ТВ доп. услуга - ' . $title; ?>" data-modal-subtitle="<?php echo $cost; ?>" data-w-id="ff354824-bbe8-33ce-0ead-71ed6cd031ef" class="wrap-white-button">
                                            <div class="white-button-text">Подключить</div>
                                            <div class="white-button-background"></div>
                                        </div>
                                    </div>
                                    <?php if ($label_toggle) : ?>
                                        <div class="option-card-label"><?php echo get_sub_field('rate-extra-label-text'); ?></div>
                                    <?php endif;?>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
	    
    </main>

<?php get_footer(); ?>