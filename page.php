<?php get_header(); ?>
<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>
<div class="container">
    <div class="row">
        <div class=" page_content">
            <div class="page_heading text-center">
                <h3 class="text-center my-4 py-2 border-bottom">
                    <?php the_title(); ?>
                </h3>
            </div>
            <div class="my-2">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>