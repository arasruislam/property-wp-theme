<div class="hero">
    <div class="hero-slide">
        <?php
        $slide_imgs = get_field('slide_img', 'option');
        foreach ($slide_imgs as $slide_img) { ?>
        <div class="img overlay" style="background-image: url('<?php echo $slide_img['img']['url'] ?>')"></div>
        <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">
                    <?php esc_html_e('Easiest way to find your dream home', 'property') ?>
                </h1>
                <form action="<?php echo esc_url(home_url()); ?>"
                    class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200"
                    method="$_GET">
                    <input id="search" type="text" class="form-control px-4"
                        placeholder="Your ZIP code or City. e.g. New York" name="s" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>