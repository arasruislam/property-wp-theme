<?php

/**
 * This Page display when a user place wrong url
 * */
?>
<?php get_header(); ?>

<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>
<div class="container">
    <div class="row">
        <div class="error_content">
            <!-- <img src="<?php //echo get_template_directory_uri(); 
                            ?>./images/eror-404.jpg"
                alt="<?php //single_post_title(); 
                        ?>"> -->
            <h2 class="text-center Oops"><?php esc_html_e('Oops', 'property') ?></h2>
            <h4 class="text-center"><?php esc_html_e(' Wrong Url Submitted', 'property') ?></h2>

                <div class="text-center my-3">
                    <a href="<?php echo site_url(); ?>">
                        <button type="button"
                            class="btn btn-danger text-center"><?php esc_html_e('Back To Home', 'property') ?>
                        </button>
                    </a>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>