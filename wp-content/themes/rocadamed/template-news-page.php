<!-- 
    Template Post Type: post, product
-->
<?php
get_header();
?>
<section class="section news">
    <div class="container">
        <h1 class="section-title">Стоматологические статьи</h1>
        <ul class="news-list">
        <?php
            global $post;
            $news_args = array(
                'publish' => true,
                'category_name' => 'news',
            );
            $myposts = get_posts($news_args);
            foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
                <li class="news__item">
                    <div class="new">
                        <a href="<?php the_permalink() ?>" class="new__title"><?php the_title(); ?></a>
                        <div class="new__date"><?php the_date(); ?></div>
                        <div class="new__text"><?php the_truncated_post( 300 ); ?></div>
                    </div>
                    <a href="<?php the_permalink() ?>" class="specialists-slider__btn-text specialists-slider__btn-text-ml-40">ЧИТАТЬ ДАЛЬШЕ</a>
                </li>
                <?php 
            }
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>
<?php
get_footer();
?>
