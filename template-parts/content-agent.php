<div class="section section-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6 mb-5">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    <?php esc_html_e('Our Agents', 'property') ?>
                </h2>
                <p class="text-black-50">
                    <?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                    enim pariatur similique debitis vel nisi qui reprehenderit totam?
                    Quod maiores.', 'property') ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => ' Agents ',
                'post_per_page' => 3,
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();

                $agent_title = get_field('agent_title');
                $agent_info = get_field('agent_info');
            ?>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="h-100 person">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid" />

                    <div class="person-contents">
                        <h2 class="mb-0"><a href="#">
                                <?php the_title(); ?>
                            </a></h2>
                        <span class="meta d-block mb-3">
                            <?php echo $agent_title ?>
                        </span>
                        <p>
                            <?php echo $agent_info ?>
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <?php
                                $socials = get_field('social');
                                foreach ($socials as $social) { ?>
                            <li class="list-inline-item">
                                <a href="<?php echo $social['social_url'] ?><">
                                    <span class="<?php echo $social['social_icons']['value'] ?>"></span>
                                </a>
                            </li>
                            <?php
                                }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>