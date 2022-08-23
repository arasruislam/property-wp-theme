<?php

/**
 *Template Name: Contact Page
 */
?>
<?php get_header(); ?>

<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <?php echo get_template_part('./template-parts/address') ?>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <?php echo do_shortcode('[contact-form-7 id="169" title="Contact"]') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>