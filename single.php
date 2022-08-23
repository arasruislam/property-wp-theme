<?php

/**
 * Single Page
 * */

$state_name = get_field('state_name');
?>
<?php get_header(); ?>

<!-- Breadcrumb -->
<?php echo get_template_part('./template-parts/content', 'breadcrumb') ?>


<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        <?php
                        $images = get_field('image_gallery', 'option');

                        foreach ($images as $image) { ?>

                        <img src="<?php echo $image['image']['url']; ?>" alt="<?php the_title(); ?>"
                            class="img-fluid" />
                        <?php
                        }
                        ?>
                        <!-- <img src="images/img_1.jpg" alt="Image" class="img-fluid" /> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">
                    <?php the_title(); ?>
                </h2>
                <p class="meta"><?php echo $state_name; ?></p>
                <?php the_content(); ?>
                <div class="d-block agent-box p-5">
                    <?php
                    $author_id = $post->post_author;
                    $author_fname = get_the_author_meta('first_name', $author_id);
                    $author_disc = get_the_author_meta('description', $author_id);
                    $author_nickname = get_the_author_meta('nickname', $author_id);
                    $author_avatar = get_avatar_url($author_id);
                    ?>
                    <div class="img mb-4">
                        <img src="<?php echo $author_avatar ?>" alt="Image" class="img-fluid" />
                    </div>
                    <div class="text">
                        <h3 class="mb-0"><?php echo $author_fname  ?></h3>
                        <div class="meta mb-3"><?php echo $author_nickname ?></div>
                        <p>
                            <?php echo $author_disc ?>
                        </p>
                        <ul class="list-unstyled social dark-hover d-flex">
                            <?php
                            $socials = get_field('social');
                            if ($socials) { ?>
                            <?php
                                foreach ($socials as $social) { ?>
                            <li class="list-inline-item">
                                <a href="<?php echo $social['social_url'] ?><">
                                    <span class="<?php echo $social['social_icons']['value'] ?>"></span>
                                </a>
                            </li>
                            <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>