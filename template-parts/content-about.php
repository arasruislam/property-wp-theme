<div class="section section-4 bg-light">
    <div class="container">
        <?php
        $args = [
            'post_type' => ' Abouts ',
            'post_per_page' => 1,
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();

            $pro_item_legits = get_field('pro_item_legit');
        ?>
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-5">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    <?php esc_html_e("Let's find home that's perfect for you", 'property') ?>
                </h2>
                <p class="text-black-50">
                    <?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit.', 'property') ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <?php
                    foreach ($pro_item_legits as $pro_item_legit) { ?>
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="<?php echo $pro_item_legit['icon'] ?>"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">
                            <?php echo $pro_item_legit['title'] ?>
                        </h3>
                        <p class="text-black-50">
                            <?php echo $pro_item_legit['text'] ?>
                        </p>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
        <div class="row section-counter mt-5">
            <?php
                $counters = get_field('counter', 'option');
                foreach ($counters as $counter) { ?>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">
                            <?php echo $counter['number']; ?>
                        </span></span>
                    <span class="caption text-black-50">
                        <?php echo $counter['text']; ?>
                    </span>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>