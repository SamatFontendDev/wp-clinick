<?php
    $desc = get_post_meta(get_the_ID(), 'doctor_desc', true);
    $full_desc = get_post_meta(get_the_ID(), 'doctor_full_desc', true);
?>
<li class="doctor__item">
    <div class="doctor__item-col">
        <div class="doctor-name doctor-name--blue">
            <div><?php the_title(); ?></div>
            <div><?=$desc?></div>
        </div>
    </div>
    <div class="doctor__item-col">
        <div class="doctor-desc"><?=$full_desc?></div>
    </div>
</li>