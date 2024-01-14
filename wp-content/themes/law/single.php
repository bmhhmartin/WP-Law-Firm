<?php
get_header();
?>
<section class="page-section bg-light" id="portfolio" style="padding-top: 150px">
    <div class="container">
        <div>
            <h2 class="section-heading"><?php the_title();?></h2>
        </div>
        <div class="row">
                <div class="col-lg-9 col-sm-12 mb-4">
                    <div>
                        <?php
                        if (has_post_thumbnail()){
                            the_post_thumbnail('large', array('class'=>'img-fluid', 'alt'=>'post image'));;
                        }
                        ?>
                        <div class="portfolio-caption mt-3" style="text-align: left">
                            <div class="portfolio-caption-heading"><?php the_content();?></div>
                            <div class="pt-2">
                                <div class="portfolio-caption-subheading text-muted" style="text-transform: capitalize;"><?php the_author();?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo get_the_date();?></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 mb-4">
                    <div class="sidebar">
                        <?php
                        if (is_active_sidebar('post_sidebar')){
                            dynamic_sidebar('post_sidebar');
                        }
                        ?>
                    </div>

                </div>

        </div>
    </div>
</section>


<?php
get_footer();
?>