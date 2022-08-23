<?php get_header() ?>

<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>

<!-- Featured Area -->
<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    <?php esc_html_e('Featured Properties', 'property') ?>
                </h2>
            </div>
        </div>
        <?php echo get_template_part('./template-parts/content', 'blog') ?>
    </div>
</div>

<!-- Blog section -->
<div class="section section-properties">
    <div class="container">
        <div class="row">
            <?php
            $args = [
                'post_type' => ' post ',
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();

                $property_value = get_field('property_value');
                $property_address = get_field('property_address');
                $state_name = get_field('state_name');
                $single_button = get_field('single_button');
                $bed = get_field('bed');
                $bath = get_field('bath');
            ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="<?php the_permalink(); ?>" class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" class="img-fluid" />
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>
                                <?php echo $property_value; ?>
                            </span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">
                                <?php echo $property_address; ?>
                            </span>
                            <span class="city d-block mb-3">
                                <?php echo $state_name; ?>
                            </span>

                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3">
                                    <span class="<?php echo $bed['icon'] ?> me-2"></span>
                                    <span class="caption">
                                        <?php echo $bed['beds']; ?>
                                    </span>
                                </span>
                                <span class="d-block d-flex align-items-center">
                                    <span class="<?php echo $bath['icon']; ?> me-2"></span>
                                    <span class="caption"><?php echo $bath['baths']; ?></span>
                                </span>
                            </div>

                            <?php if ($single_button) { ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary py-2 px-3">
                                <?php echo $single_button; ?>
                            </a>
                            <?php
                                }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata();
            ?>
            <!-- .item -->

        </div>
        <div class="row align-items-center py-5">
            <!-- <div class="col-lg-3">Pagination (1 of 10)</div> -->
            <div class="col-lg-6 text-center">
                <div class="custom-pagination">
                    <?php the_posts_pagination( [
                        'mid_size'  => 2,
                        'prev_text' => __('Pre', 'property'),
                        'next_text' => __('Next', 'property'),
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>