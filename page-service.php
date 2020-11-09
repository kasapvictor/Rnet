<?php
/**
 * Template Name: Сервис
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

        <section class="section-service">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1">Услуги «Сервис-центра»</h1>
                </div>
            </div>
            <div class="container">
                <div class="service-content">
                    <div class="contact-column">
                        <div class="contact-column-content">
                            <div class="contact-column-title">Услуги</div>
                            <div class="contact-row">
                                <?php
                                    if( have_rows('service-list') ):
                                        while( have_rows('service-list') ) : the_row();
                                            $name = get_sub_field('name'); ?>
                                            <div class="service-row-text ico-tech"><?php echo $name; ?></div>
                                        <?php endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="contact-column">
                        <div class="contact-column-content">
                            <div class="contact-column-title">Вызвать сервис <span class="speed-small-text">(только для абонентов)</span></div>
                            <div class="service-row-subtitle"> <?php the_field('title');?> </div>
                            <div class="contact-row">
                                <?php
                                if( have_rows('list') ):
                                    while( have_rows('list') ) : the_row();
                                        $description = get_sub_field('description'); ?>
                                        <div class="service-row-text ico-info"><?php echo $description; ?></div>
                                    <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>

	                <div class="service-hero price-list-content">
		                <div class="contact-row">
			                <div class="contact-row-text"> <?php the_field('service-price'); ?></div>
		                </div>
	                </div>

                </div>
            </div>
        </section>

	    <section class="section-service section-faq">
		    <div class="wrap-section-title">
			    <div class="container">
				    <h1 class="section-title-h1">Справочная информация&nbsp;<small>(FAQ)</small></h1>
			    </div>
		    </div>
		    <div class="container">
			    <div class="service-hero price-list-content">
				    <div class="contact-row">
					    <?php
	                        if( have_rows('faq') ):
	                            while( have_rows('faq') ) : the_row();
	                                $name = get_sub_field('name');
	                                $file = get_sub_field('file'); ?>
								    <a href="<?php echo $file; ?>" class="document-link-text ico-new-tab-link" target="_blank"><?php echo $name; ?></a>
	                            <?php endwhile;
	                        endif;
                        ?>
				    </div>
			    </div>
		    </div>
	    </section>

    </main>

<?php get_footer(); ?>