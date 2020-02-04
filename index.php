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


<div class="container">
<!-- include Template Part-->
<?php get_template_part('template-parts/home', 'featured') ?>
<!--Include File-->
<img src="<?php echo get_theme_file_uri();?>/assets/img/abc.png">
<!--Display Content via loop-->
<?php
if (have_posts()) :
    while (have_posts()) :
         the_post();
?>
        <h1><?php the_title()?> </h1>
<?php
    endwhile;
endif;
?>
</div>





<?php
get_sidebar();
get_footer();
?>
