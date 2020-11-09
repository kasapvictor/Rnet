<?php
/**
 * Template Name: Документы
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

        <section class="section-service section-documents">
            <div class="wrap-section-title">
                <div class="container">
                    <h1 class="section-title-h1"><span>Документы</span> <span class="bread-crumbs-delimeter">/</span> <span>Лицензии</span> <span class="bread-crumbs-delimeter">/</span> <span>Архив тарифов</span></h1>
                </div>
            </div>
            <div class="container">
                <div class="service-content">
                    <div class="wrap-documents">
                        <div data-duration-in="500" data-duration-out="200" data-easing="ease-in-out" class="wrap-payment-content w-tabs">
                            <div class="tabs-menu w-tab-menu"><a data-w-tab="Tab 1" class="tab-link w-inline-block w-tab-link w--current"><div class="tab-link-content ico-documents">Документы</div></a><a data-w-tab="Tab 2" class="tab-link w-inline-block w-tab-link"><div class="tab-link-content ico-license">Лицензии</div></a><a data-w-tab="Tab 3" class="tab-link w-inline-block w-tab-link"><div class="tab-link-content ico-archive">Архив тарифов</div></a></div>
                            <div class="tabs-content w-tab-content">
                                <!-- documents -->
                                <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                                    <div class="tab-content">
                                        <div class="tab-title">Документы</div>
                                        <?php
                                            if( have_rows('links') ):
                                                while( have_rows('links') ) : the_row();
                                                    $name = get_sub_field('name');
                                                    $link = get_sub_field('link'); ?>
                                                    <a href="<?php echo $link; ?>" class="document-link-text ico-new-tab-link" target="_blank"><?php echo $name; ?></a>
                                                <?php endwhile;
                                            endif;
                                        ?>
                                    </div>
                                </div>

                                <!-- license -->
                                <div data-w-tab="Tab 2" class="w-tab-pane">
                                    <div class="documents-tab-content">
                                        <div class="tab-title">Лицензии</div>
                                        <div class="wrap-license-content">
                                            <?php
                                            if( have_rows('license-list') ):
                                                while( have_rows('license-list') ) : the_row();
                                                        $number = get_sub_field('number');
                                                        $description = get_sub_field('description');
                                                        $image = get_sub_field('image');
                                                    ?>
                                                    <div class="wrap-license">
                                                        <a href="#" class="wrap-license-image w-inline-block w-lightbox">
                                                            <img
                                                                src="<?php echo $image['url'];?>"
                                                                loading="lazy"
                                                                sizes="(max-width: 479px) 75vw, (max-width: 767px) 40vw, (max-width: 991px) 36vw, 21vw"
                                                                alt="<?php echo $number;?>">
                                                            <script type="application/json" class="w-json">
                                                                { "items": [{
                                                                    "type":"image",
                                                                    "_id":"5f95823ba2bf70b3980d3e1a",
                                                                    "fileName":"<?php echo $image['filename'];?>",
                                                                    "origFileName":"<?php echo $image['filename'];?>",
                                                                    "width": "<?php echo $image['width'];?>",
                                                                    "height":"<?php echo $image['height'];?>",
                                                                    "fileSize":"<?php echo $image['filesize'];?>",
                                                                    "url":"<?php echo $image['url'];?>"
                                                                }]}
                                                            </script>
                                                        </a>
                                                        <div class="license-num"><?php echo $number;?></div>
                                                        <div class="license-description"><?php echo $description; ?></div>
                                                    </div>
                                                <?php endwhile;
                                            endif;
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div data-w-tab="Tab 3" class="w-tab-pane">
                                    <div class="tab-content">
                                        <div class="tab-title">Архив тарифов</div>
                                        <?php
                                            if( have_rows('links_archives') ):
                                                while( have_rows('links_archives') ) : the_row();
                                                    $name = get_sub_field('name');
                                                    $link = get_sub_field('link'); ?>
                                                    <a href="<?php echo $link; ?>" class="document-link-text ico-new-tab-link" target="_blank"><?php echo $name; ?></a>
                                                <?php endwhile;
                                            endif;
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>