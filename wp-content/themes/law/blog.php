<?php
/*
Template Name: blog
*/

get_header();
?>


<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Blog</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a href="#" class="portfolio-link">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/portfolio/1.jpg" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
