<?php
/**
 * Template Name: Бизнес
 */
get_header();
?>

<?php get_template_part( 'partials/navigation'); ?>

<?php get_template_part( 'partials/break-news'); ?>

    <header class="header header-contact">
        <div class="container">
            <h1 class="page-title-h1"><?php the_title(); ?></h1>
            <div class="features-subtitle contact-subtitle"><?php the_content(); ?></div>
        </div>
    </header>

    <main class="main">

        <!-- rates links -->
        <section class="rates-for-business">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Тарифы для бизнеса</h1>
                </div>
            </div>
            <div class="container">
                <div class="options-content">
                    <div class="option-card">
                        <div class="option-card-header">
                            <h2 class="option-card-title ico-wifi">Интернет</h2>
                        </div>
                        <div class="option-card-body-business">
                            <div class="retes-business-body-text"><?php the_field('description-internet');?></div>
                        </div>
                        <div class="option-card-footer">
                            <a href="<?php the_field('link-internet');?>" class="link-text">Посмотреть тарифы</a>
                        </div>
                        <?php if (get_field('label-internet-toggle')) : ?>
                            <div class="option-card-label"><?php the_field('label-internet');?></div>
                        <?php endif; ?>
                    </div>
                    <div class="option-card">
                        <div class="option-card-header">
                            <h2 class="option-card-title ico-phone">Телефония</h2>
                        </div>
                        <div class="option-card-body-business">
                            <div class="retes-business-body-text">
                                <?php the_field('description-phone');?>
                            </div>
                        </div>

                        <div class="option-card-footer">
                            <a href="<?php the_field('link-phone');?>" class="link-text">Посмотреть тарифы</a>
                        </div>

                        <?php if (get_field('label-phone-toggle')) : ?>
                            <div class="option-card-label"><?php the_field('label-phone');?></div>
                        <?php endif; ?>
                    </div>
                    <div class="option-card">
                        <div class="option-card-header">
                            <h2 class="option-card-title ico-tv">Телевидение</h2>
                        </div>
                        <div class="option-card-body-business">
                            <div class="retes-business-body-text">
                                <?php the_field('description-tv');?>
                            </div>
                        </div>

                        <div class="option-card-footer">
                            <a href="<?php the_field('link-tv');?>" class="link-text">Посмотреть тарифы</a>
                        </div>

                        <?php if (get_field('label-tv-toggle')) : ?>
                            <div class="option-card-label"><?php the_field('label-tv');?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- features -->
        <section class="features business-features">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Наши преимущества</h1>
                </div>
            </div>
            <div class="container">
                <div class="featires-content">
                    <div class="featires-row">
                        <div class="features-row-image image1" style="background-image: url(<?php the_field('features-image-1');?>)"></div>
                        <div class="features-row-body">
                            <h1 class="features-row-title"><?php the_field('features-title-1');?></h1>
                            <div class="features-row-text"><?php the_field('features-description-1');?></div>
                        </div>
                    </div>
                    <div class="featires-row features-row-padding-right">
                        <div class="features-row-image image2" style="background-image: url(<?php the_field('features-image-2');?>)"></div>
                        <div class="features-row-body">
                            <h1 class="features-row-title"><?php the_field('features-title-2');?></h1>
                            <div class="features-row-text"><?php the_field('features-description-2');?></div>
                        </div>
                    </div>
                    <div class="featires-row">
                        <div class="features-row-image image3" style="background-image: url(<?php the_field('features-image-3');?>)"></div>
                        <div class="features-row-body">
                            <h1 class="features-row-title"><?php the_field('features-title-3');?></h1>
                            <div class="features-row-text"><?php the_field('features-description-3');?></div>
                        </div>
                    </div>
                    <div class="featires-row features-row-padding-right">
                        <div class="features-row-image image4" style="background-image: url(<?php the_field('features-image-4');?>)"></div>
                        <div class="features-row-body">
                            <h1 class="features-row-title"><?php the_field('features-title-4');?></h1>
                            <div class="features-row-text"><?php the_field('features-description-4');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- call to action -->
        <section class="business-call-to-action">
            <div class="container">
                <div class="call-to-action-content">
                    <div class="call-to-action-text">
                        <div>У вас остались вопросы?</div>
                        <div>Свяжитесь с нами!</div>
                    </div>
                    <div data-modal="small-form"  data-modal-title="Ма вам перезвоним!" data-modal-subtitle="" data-w-id="e8b65c9a-c93e-277f-43f1-f655f2e83f53" class="wrap-white-button">
                        <div class="white-button-text">Перезвонить</div>
                        <div class="white-button-background"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>