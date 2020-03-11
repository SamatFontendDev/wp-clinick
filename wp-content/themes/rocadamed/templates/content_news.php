<?php
    $short_desc = get_post_meta(get_the_ID(), 'new_short_desc', true);
?>
<li class="news__item">
    <div class="new">
        <a href="#" class="new__title"><?php the_title(); ?></a>
        <div class="new__date">time</div>
        <div class="new__text"><?=$short_desc?></div>
    </div>
    <a href="#" class="specialists-slider__btn-text specialists-slider__btn-text-ml-40">ЧИТАТЬ ДАЛЬШЕ</a>
</li>