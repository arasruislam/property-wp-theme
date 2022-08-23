<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<!-- Breadcrumb -->
<div class="hero page-inner overlay"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_bg_1.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">
                    <?php
                    printf(
                        /* translators: %s: Search term. */
                        esc_html__('Results for "%s"', 'ctn'),
                        '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
                    );
                    ?> </h1>

                <!-- <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Services
                        </li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>
</div>

<div class="search-page-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 my-4">
                <?php
                while (have_posts()) {
                    the_post();

                    $property_value = get_field('property_value');
                    $property_address = get_field('property_address');
                    $state_name = get_field('state_name');
                    $single_button = get_field('single_button');
                    $bed = get_field('bed');
                    $bath = get_field('bath');
                ?>
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
                <?php
                }
                wp_reset_postdata();
                ?>
                <!-- .item -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>