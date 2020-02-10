<?php
/**
 * Template-About.php
 * PHP Version 7.2.24
 * Template Name: About Template
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
        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
        <img src="<?php echo $img_url?>" alt="<?php echo get_the_title()?>" class="img-fluid">
    </div>
    <div class="flex-row ml-0 mr-0 mt-3">
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
<?php
get_footer();
?>