<?php
/**
 * Index.php
 * PHP Version 7.2.24
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

<div class="home-main">
    <div class="row mr-0 ml-0">
        <div class="home-posts col-8">
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
    <div class="home-sidebar col-lg-4">
        <?php get_sidebar();?>
        </div>
    </div>
 </div>

<?php
get_footer();
?>

