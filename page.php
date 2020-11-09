<?php  get_header(); ?>

<?php get_template_part( 'partials/navigation'); ?>

<?php get_template_part( 'partials/break-news'); ?>

    <header class="header post-header">

        <div class="container">
            <h1 class="page-title-h1 post-title"><?php the_title(); ?></h1>
            <div class="features-subtitle"></div>
        </div>
    </header>

    <main class="main post-main">
        <div class="container ">
            <article class="post-content">
                <div class="post-background-thumb" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                <div class="article-content"> <?php the_content();?> </div>
            </article>
        </div>

    </main>

<?php get_footer(); ?>