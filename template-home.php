<?php
/**
 * Template-Home.php
 * PHP Version 7.2.24
 * Template Name: Homepage Template
 * @category  Components
 * @package   Wordpress
 * @author    Bilal Ahmad Khan <bilalahmad.nts@gmail.com>
 * @copyright 2020 Bilal Ahmad Khan
 * @license   Licence Name
 * @version   GIT: @1.0.0@
 * @link      localhost
 * @see       Link to project website
 */
get_header();
?>
   <div class="page-custom-header">
    <?php
        $banner_status = get_theme_mod('wplearning_home_banner', 'Yes');
    ?>
        <?php
        if ($banner_status == "Yes") :
            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
        <img src="<?php echo $img_url?>" alt="<?php echo get_the_title()?>" class="img-fluid">
        <?php endif; ?>
        <div class="flex-row ml-0 mr-0 mt-3 text-center">
        <!--Display Content via loop-->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <h1><?php the_title()?> </h1>
                <p><?php the_content()?> </p>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    </div>
    <div class="home-services row ml-0 mr-0 mt-5">
    <?php
                    $args= array(
                        /*from cat edit */
                        'post_type' => 'bilal_service',
                        'post_per_page' => 3,
                        'order' => 'ASC'
                    );
                    $tech_posts= new WP_Query($args);
                    if ($tech_posts->have_posts()) :
                        while ($tech_posts->have_posts()) :
                            $tech_posts->the_post();
                    ?>
                    <div class="home-service-col col-4">
                        <div class="service-thumb col-12">
                            <?php the_post_thumbnail('medium', array('class'=>'rounded'))?>
                        </div>
                        <div class="service-title col-12">
                            <h3><a href="<?php echo get_the_permalink(get_the_ID())?>"><?php the_title() ?></a></h3>
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <?wp_reset_postdata(); ?>
    </div>
    <div class="home-posts row ml-0 mr-0 mt-5">
        <!--Display Content via loop-->
        <div class="col">

            <div class="section-head">
                <h3><?php echo get_theme_mod('wplearning_featured_block_1', 'Latest From Technology')?></h3>
            </div>

            <div class="section-content pt-4">
                <?php
                $args= array(
                    /*from cat edit */
                    'cat' => 196
                );
                $tech_posts= new WP_Query($args);
                if ($tech_posts->have_posts()) :
                    while ($tech_posts->have_posts()) :
                        $tech_posts->the_post();
                ?>
                <div class="home-post-row row ml-0 mr-0 mb-3">
                    <div class="post-thumb col-4 pl-0">
                        <?php the_post_thumbnail('thumbnail', array('class'=>'img-fluid'))?>
                    </div>
                    <div class="post-title col-8">
                        <h3><a href="<?php echo get_the_permalink(get_the_ID())?>"><?php the_title() ?></a></h3>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
                <?wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="col">
            <div class="section-head">
                <h3><?php echo get_theme_mod('wplearning_featured_block_2', 'Latest From Social Media')?></h3>
            </div>
            <div class="section-content pt-4">
            <?php
                $args= array(
                    /*from cat edit */
                    'cat' => 197
                );
                $sm_posts= new WP_Query($args);
                if ($sm_posts->have_posts()) :
                    while ($sm_posts->have_posts()) :
                          $sm_posts->the_post();
                ?>
                <div class="home-post-row row ml-0 mr-0 mb-3">
                    <div class="post-thumb col-4 pl-0">
                        <?php the_post_thumbnail('thumbnail', array('class'=>'img-fluid'))?>
                    </div>
                    <div class="post-title col-8">
                        <h3><a href="<?php echo get_the_permalink(get_the_ID())?>"><?php the_title() ?></a></h3>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
                <?wp_reset_postdata(); ?>
         </div>
    </div>
    </div>             
<?php
get_footer();
?>
