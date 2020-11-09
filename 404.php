<?php
/**
 * Template Name: Страница 404
 */
get_header(); ?>

<?php get_template_part( 'partials/navigation'); ?>

<?php get_template_part( 'partials/break-news'); ?>

    <header class="header post-header">
        <div class="container">
            <h1 class="page-title-h1 post-title">Ошибка 404!</h1>
        </div>
    </header>

    <main class="main">
        <section class="section-service">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Такой страницы не существует</h1>
                </div>
            </div>
            <div class="container">
                <div class="service-content">
                    <div class="service-hero">
                        <div class="contact-column-title"></div>
                        <div class="contact-row">
                            <div class="contact-row-text"><?php the_field('content-404', 'option'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>