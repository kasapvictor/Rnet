<?php
/**
 * Template Name: Новости
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

	<main class="main main-news">
		<section class="section-news">
			<div class="container">
				<div class="news-content">
					<?php
						global $post;
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						query_posts ([
						        'post_type' => 'post',
						        'posts_per_page' => 6,
						        'paged' => $paged,
						    ]);
						while ( have_posts() ) : the_post();
					?>
					<article class="news-post-card">
						<div class="post-date"><?php echo get_the_date(); ?></div>
						<h3 class="post-title"><?php echo $post -> post_title; ?></h3>
						<div class="post-excerpt"><?php the_excerpt(); ?> ...</div>
						<div class="wrap-read-more">
							<a href="<?php the_permalink(); ?>" class="wrap-arrow-button w-inline-block">
								<div class="white-button-arrow">→</div>
							</a>
						</div>
					</article>
                <?php endwhile; ?>
				</div>
				<?php
	                $args = [
	                    'prev_text' => __( '←' ),
	                    'next_text' => __( '→' ),
	                ];
	                the_posts_pagination( $args );
	                // Reset Query
	                wp_reset_query();
                ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>