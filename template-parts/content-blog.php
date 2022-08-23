<div class="row">
    <div class="col-12">
        <div class="property-slider-wrap">
            <div class="property-slider">
                <?php
                $args = [
                    'post_type' => ' post ',
                    'post_per_page' => 5,
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
                <div class="property-item">
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
                <?php
                }
                wp_reset_postdata();
                ?>

                <!-- .item -->
            </div>

            <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">
                    <?php esc_html_e('Prev', 'property') ?>
                </span>
                <span class="next" data-controls="next" aria-controls="property" tabindex="-1">
                    <?php esc_html_e('Next', 'property') ?>
                </span>
            </div>
        </div>
    </div>
</div>