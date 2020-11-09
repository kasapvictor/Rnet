<div class="break-news">
    <div class="container">
        <?php if ( get_field('break-news-toggle', 'options') ) : ?>

        <div class="break-news-content">
	        <?php the_field('break_news', 'options'); ?>
        </div>

        <?php endif; ?>
    </div>
</div>