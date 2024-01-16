<?php
/*
Template Name: home page template
*/
?>
<?php
get_header();
get_template_part('components/home_banner');
get_template_part('components/service');
get_template_part('components/portfolio');
get_template_part('components/about');
get_template_part('components/team');
get_template_part('components/clients');
get_template_part('components/contact');
get_footer();
?>
