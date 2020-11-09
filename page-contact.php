<?php
/**
 * Template Name: Контакты
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

        <section class="section-contact">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Свяжитесь в нами!</h1>
                </div>
            </div>
            <div class="container">
                <div class="contact-content">
                    <div class="contact-column">
                        <div class="contact-column-content">
                            <div class="contact-row"> <?php the_field('content');?> </div>
                            <div class="contact-row">
                                <div class="contact-row-text ico-location"> <?php the_field('address');?> </div>
                                <div class="contact-row-text ico-time"> <?php the_field('time');?> </div>
                                <div class="contact-row-text ico-support"><a href="tel:+<?php the_field('phone');?>" class="link-text"><?php the_field('phone');?></a></div>
                                <div class="contact-row-text ico-mail"><a href="mailto:<?php the_field('mail');?>" class="link-text"><?php the_field('mail');?></a></div>
                            </div>
                            <div class="contact-row">
                                <div class="contact-row-text"><strong class="bold-text">Для правообладателей и организаций по лицензированию:</strong></div>
                                <div class="contact-row-text ico-mail"><a href="mailto:<?php the_field('mail-company');?>" class="link-text"><?php the_field('mail-company');?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-column">
                        <div class="contact-column-content">
                            <div class="contact-column-title">Напишите нам</div>
                            <div class="contact-form w-form">
                                <form data-name="Заявка из слайдера" class="form-contact">
                                    <div class="contact-form-body">
                                        <div class="form-row"><input type="text" class="field w-input" autofocus="true" maxlength="256" name="name" data-name="name" placeholder="Иванов Иван * (обязательное поле)" id="name-8" required=""></div>
                                        <div class="form-row"><input type="tel" class="field w-input" maxlength="256" name="phone" data-name="phone" placeholder="+79012034050 * (обязательное поле)" id="phone-6" required=""></div>
                                        <div class="form-row"><input type="email" class="field w-input" maxlength="256" name="email" data-name="email" placeholder="ivanov.ivan@mail.ru" id="email-3"></div>
                                        <div class="form-row"><textarea placeholder="Сообщение" maxlength="5000" id="message" name="message" data-name="message" class="field-textarea w-input"></textarea></div>
                                        <div class="form-row">
                                            <div class="w-form-formrecaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled g-recaptcha-invalid-key"></div>
                                        </div>
                                        <div class="form-row"><label class="w-checkbox checkbox-field"><input type="checkbox" id="agree-policy2" name="agree" data-name="agree" required="" class="w-checkbox-input checkbox"><span for="agree" class="checkbox-label w-form-label">Согласен на <a href="#" target="_blank" class="link-text">обработку персональных данных</a></span></label></div>
                                        <div class="form-row form-row-last">
                                            <div class="wrap-white-button form-submit"><input type="submit" value="Отправить" data-wait="..." class="white-button-text form-submit-text w-button"></div>
                                        </div>
                                    </div>
                                </form>
                                <div class="success-message w-form-done">
                                    <div>Ваше сообщение отправлено!</div>
                                </div>
                                <div class="error-message w-form-fail">
                                    <div>Ошибка отправки сообщения!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div class="contact-map-script w-embed w-script">
	                <?php the_field('map'); ?>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>