<section class="page-section bg-light" id="portfolio" style="padding-top: 150px">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">All Posts</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row text-center" <?php post_class();?>>
            <?php
            while (have_posts()){
                the_post();
                ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a href="<?php the_permalink();?>" class="portfolio-link">
                            <?php
                                if (has_post_thumbnail()){
                                    the_post_thumbnail('large', array('class'=>'img-fluid', 'alt'=>'post image'));;
                                }
                            ?>
                            <div class="portfolio-caption" style="text-align: left">
                                <div class="portfolio-caption-heading">
                                    <?php if (strlen("the_title()") > 20) { ?>
                                        <?php the_title(); ?>
                                    <?php } if (strlen("the_title()") < 20) { ?>
                                        <?php echo substr(get_the_title(), 0, 20); ?>...
                                    <?php } ?>
                                </div>
                                <div class="d-flex justify-content-between pt-2">
                                    <div class="portfolio-caption-subheading text-muted" style="text-transform: capitalize;"><?php the_author();?></div>
                                    <div class="portfolio-caption-subheading text-muted"><?php echo get_the_date();?></div>
                                </div>
                            </div>
                        </a href="<?php the_permalink();?>">

                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</section>

