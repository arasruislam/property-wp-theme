<section class="features-1">
    <div class="container">
        <div class="row">
            <?php
            $args = [
                'post_type' => ' Services',
                'post_per_page' => 4,
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
                    <span class="<?php echo $post_icon['value'] ?>"></span>
                    <?php
                        } ?>
                    <h3 class="mb-3">
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
</section>