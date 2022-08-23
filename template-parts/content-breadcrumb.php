<div class="hero page-inner overlay"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_bg_1.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">
                    <?php echo is_front_page() ? get_bloginfo('name') : wp_title(''); ?></h1>

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