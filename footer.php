<?php
$contact = get_field('contact', 'option');
$source = get_field('source', 'option');
$links = get_field('links', 'option');
$copy_right = get_field('copy_right', 'option');

?>
<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>
                        <?php echo $contact['contact_title']; ?>
                    </h3>
                    <address>
                        <?php echo $contact['contact_address']; ?>
                    </address>
                    <ul class="list-unstyled links">
                        <li><a href="tel://11234567890">
                                <?php echo $contact['contact_number']; ?>
                            </a></li>
                        <a href="<?php echo $contact['mail_url']; ?>">
                            <?php echo $contact['gmail']; ?>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <?php echo $source ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">

                    <?php echo $links ?>

                    <ul class="list-unstyled social">
                        <?php
                        $socials = get_field('social', 'option');
                        foreach ($socials as $social) { ?>
                        <li>
                            <a href="<?php echo $social['social_url'] ?><"><span
                                    class="<?php echo $social['social_icons']['value'] ?>"></span></a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <?php echo $copy_right ?>
            </div>
        </div>
    </div>
</div>

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="visually-hidden"><?php esc_html_e('Loading...', 'property') ?></span>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>