<!-- 
    Template name: Страница записи детальная
    Template Post Type: post, product
-->
<?php
get_header();
?>
<div class="content">
    <section class="section news">
        <div class="container">
            <h1 class="section-title"><?php the_title(); ?></h1>
            
        <div class="new-text"><?php
        the_post();
        the_content();
        ?></div>
        <div class="new__date"><?php the_date(); ?></div>
        </div>
    </section>
</div>
<?php
get_footer();
?>
