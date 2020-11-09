<?php
	$discounts = get_field('dicsounts-favorite');
	foreach ( $discounts as $discount ) :
	    $id = $discount->ID;
	    $title = get_the_title($id);
	    $excerpt = get_the_excerpt($id);
	    $date = get_the_date('d.m.Y', $id);

    ?>

	<article class="post-card">
		<time datetime="<?php echo $date;?>" class="post-date"><?php echo $date;?></time>
		<h3 class="post-title"><?php echo $title; ?></h3>
		<div class="post-excerpt"><?php echo $excerpt; ?> ...</div>
		<div class="wrap-read-more">
			<a href="<?php the_permalink($id); ?>" class="wrap-arrow-button w-inline-block">
				<div class="white-button-arrow">→</div>
			</a>
		</div>
	</article>

<?php endforeach;  ?>
