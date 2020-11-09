<?php
	$args = [
	    'numberposts'      => 3,
	    'offset'           => 0,
	    'category'         => 1, // новости
        'post_status'      => 'publish',
	];
	$recent_posts = wp_get_recent_posts($args);

	foreach ($recent_posts as $post) :
		$title = $post['post_title'];
		$excerpt = $post['post_excerpt'];
		$link = $post['guid'];
		$date = $post['post_date'];
?>
		<article class="post-card">
			<time datetime="<?php echo get_the_date(); ?>" class="post-date"><?php echo get_the_date(); ?></time>
			<h3 class="post-title"><?php echo $title; ?></h3>
			<div class="post-excerpt"><?php echo $excerpt; ?> ...</div>
			<div class="wrap-read-more">
				<a href="<?php echo $link;?>" class="wrap-arrow-button w-inline-block">
					<div class="white-button-arrow">→</div>
				</a>
			</div>
		</article>

<?php endforeach;  ?>
