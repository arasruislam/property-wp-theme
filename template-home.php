<?php

/**
 *Template Name: Home Page
 */
?>
<?php get_header(); ?>

<!-- Slider/Hero Area -->
<?php echo get_template_part('./template-parts/content', 'hero') ?>

<!-- Property Area -->
<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">
                    <?php esc_html_e('Popular Properties', 'prope') ?>
                </h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p>
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" target="_blank"
                        class="btn btn-primary text-white py-3 px-4">
                        <?php esc_html_e('View all properties', 'property') ?></a>
                </p>
            </div>
        </div>
        <!-- Featured Area -->
        <?php echo get_template_part('./template-parts/content', 'blog') ?>
    </div>
</div>
<!-- Service Area -->
<?php echo get_template_part('./template-parts/content', 'service') ?>

<!-- Customer Area -->
<?php echo get_template_part('./template-parts/content', 'customer') ?>

<!-- About Area -->
<?php echo get_template_part('./template-parts/content', 'about') ?>

<!-- Real Estate agent Area -->
<div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4">
                <?php esc_html_e('Be a part of our growing real state agents', 'property') ?>
            </h2>
            <p>
                <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">
                    <?php esc_html_e('Apply for Real Estate
                    agent', 'property') ?>
                </a>
            </p>
        </div>
        <!-- /.col-lg-7 -->
    </div>
    <!-- /.row -->
</div>

<!-- Agent Area -->
<?php echo get_template_part('./template-parts/content', 'agent') ?>

<?php get_footer(); ?>