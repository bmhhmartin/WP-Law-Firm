<div class="common__banner">
    <div class="container">
        <div class="masthead-subheading">
            <?php
                if (is_page($page = '' )){
                    echo wp_title();
                }else{
                    echo '';
                }
            ?>
        </div>
        <div class="masthead-heading"><?php bloginfo('description');?></div>
    </div>
</div>

