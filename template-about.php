<?php

/**
 *Template Name: About Page
 */
?>
<?php get_header(); ?>

<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>


<div class="section">
    <div class="container">
        <div class="row text-left mb-5">
            <div class="col-12">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="col-lg-6">
                <?php the_content(); ?>
            </div>
            <div class="col-lg-6">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <?php
        $args = [
            'post_type' => ' Abouts ',
            'post_per_page' => 2,
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();

            $pro_item_legits = get_field('pro_item_legit');
        ?>
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
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <?php
            $images = get_field('image_gallery', 'option');

            foreach ($images as $image) { ?>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo $image['image']['url']; ?>" alt="<?php the_title(); ?>" class="img-fluid" />
            </div>
            <?php
            }
            ?>
        </div>
        <div class="row section-counter mt-5">
            <?php
            $counters = get_field('counter');
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
    </div>
</div>

<!-- Team Area -->
<div class="section sec-testimonials bg-light">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    <?php esc_html_e('The Team', 'property') ?>
                </h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev">
                        <?php esc_html_e('Prev', 'property') ?>
                    </span>

                    <span class="next" data-controls="next">
                        <?php esc_html_e('Next', 'property') ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="testimonial-slider">
                <?php
                $args = [
                    'post_type' => ' Agents ',
                    'post_per_page' => 6,
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();

                    $agent_title = get_field('agent_title');
                    $agent_info = get_field('agent_info');
                ?>
                <div class="item">
                    <div class="testimonial">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                            class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">
                            <?php the_title(); ?>
                        </h3>
                        <p class="text-black-50">
                            <?php echo $agent_title ?>
                        </p>

                        <p>
                            <?php echo $agent_info ?>
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <?php
                                $socials = get_field('social');
                                foreach ($socials as $social) { ?>
                            <li class="list-inline-item">
                                <a href="<?php echo $social['social_url'] ?><"><span
                                        class="<?php echo $social['social_icons']['value'] ?>"></span></a>
                            </li>
                            <?php
                                }
                                ?>
                        </ul>
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
<?php get_footer(); ?>