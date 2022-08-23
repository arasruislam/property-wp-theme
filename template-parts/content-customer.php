<div class="section sec-testimonials">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    <?php esc_html_e('Customer Says', 'property') ?>
                </h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev"><?php esc_html_e('Prev', 'property') ?></span>

                    <span class="next" data-controls="next"><?php esc_html_e('Next', 'property') ?></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <!-- Testimonial -->
        <div class="testimonial-slider-wrap">
            <div class="testimonial-slider">
                <?php
                $args = [
                    'post_type' => ' Customers ',
                    'post_per_page' => 3,
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    $profession = get_field('profession');
                    $customer_details = get_field('customer_details');
                ?>
                <div class="item">
                    <div class="testimonial">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Image"
                            class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            <?php
                                $ratings = get_field('rating');
                                foreach ($ratings as $rating) {
                                ?>
                            <span class="<?php echo $rating['per_star']['value']; ?>"></span>
                            <?php
                                }
                                ?>
                        </div>
                        <h3 class="h5 text-primary mb-4">
                            <?php the_title(); ?>
                        </h3>
                        <blockquote>
                            <p>
                                <?php echo $customer_details ?>
                            </p>
                        </blockquote>
                        <p class="text-black-50">
                            <?php echo $profession ?>
                        </p>
                    </div>
                </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>