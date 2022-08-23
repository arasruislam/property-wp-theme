<?php

/**
 * Template Name: Services Page
 */
?>
<?php get_header(); ?>

<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>

<div class="section bg-light">
    <div class="container">
        <div class="row">
            <?php
            $args = [
                'post_type' => ' Services ',
                'post_per_page' => 8,
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();
                $service_button_text = get_field('service_button_text');
                $post_icon = get_field('post_icon');
            ?>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature">
                    <?php if ($post_icon) {
                        ?>
                    <span class="<?php echo $post_icon['value'] ?> mb-4 d-block"></span>
                    <?php
                        } ?>
                    <h3 class="text-black mb-3 font-weight-bold">
                        <?php the_title(); ?>
                    </h3>
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="learn-more"><?php echo $service_button_text ?></a></p>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<!-- Customer Area -->
<?php echo get_template_part('./template-parts/content', 'customer') ?>

<?php get_footer(); ?>