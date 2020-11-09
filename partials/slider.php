<div data-delay="5000" data-animation="cross" data-autoplay="1" data-nav-spacing="6" data-duration="1000" data-infinite="1" class="hero-slider w-slider">
    <div class="mask w-slider-mask">
        <?php
            $count = 0;
            $rows = get_field('slider');
            if ( $rows ) :
            foreach( $rows as $row ) :
                $slide_title = $row['slide-title'];
                $slide_subtitle = $row['slide-subtitle'];
                $slide_image = $row['slide-image'];
                $count++;
        ?>
        <div class="slide w-slide">
            <section class="slide-content">
                <div class="container">
                    <h1 class="slide-title"> <?php echo  $slide_title; ?> </h1>
                    <div class="slide-description"><?php echo $slide_subtitle; ?> </div>
                    <div data-w-id="9e59a692-4416-e40e-51fd-fe639b7d34e4" class="wrap-blue-button" data-modal="small-form"  data-modal-title="<?php echo str_replace("<br>", "", $slide_title);?>" data-modal-subtitle="<?php echo  str_replace("<br>", "", $slide_subtitle); ?>" >
                        <div class="blue-button-text">Подключить</div>
                        <div class="blue-button-background"></div>
                    </div>
                </div>
                <div class="slider-image" style="background-image: url('<?php echo $slide_image; ?>')"></div>
            </section>
            <div class="wrap-current-slider-num">
                <div class="slide-current-number"><?php echo $count; ?></div>
            </div>
        </div>
        <?php endforeach; endif;?>
    </div>
    <!-- arrows -->
		<div class="left-arrow w-slider-arrow-left">
			<div class="slide-arrow">←</div>
		</div>
		<div class="right-arrow w-slider-arrow-right">
			<div class="slide-arrow">→</div>
		</div>

    <!-- slide-nav -->
    <div class="slide-nav w-slider-nav w-slider-nav-invert"></div>

    <!-- slide-counter -->
    <div class="slider-counter">
        <div class="count-delimeter">/</div>
        <div class="slide-count-total">3</div>
    </div>
</div>

