<?php
    $desc = get_post_meta(get_the_ID(), 'doctor_desc', true);
?>
<li class="specialists-slider__item">
    <div class="specialists-slider__link">
        <div class="specialists-slider__ava">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'doctor-slider') ?>" alt="" class="specialists-slider__img">
        </div>
        <div class="specialists-slider__name"><?php the_title(); ?></div>
        <div class="specialists-slider__desc"><?=$desc?></div>
    </div>
</li>