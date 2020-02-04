<?php
/**
 * Page.php
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

<!--Display Content via loop-->
<?php 
if (have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>
        <h1><?php the_title()?> </h1>
        <p><?php the_content()?> </p>
<?php  
    endwhile; 
endif; 
?>

<?php
get_footer();
?>