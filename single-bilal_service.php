<?php
/**
 * Single.php
 * PHP Version 7.2.24
 * test
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

<div class="post-container">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();?>
       
        <div class="post-title">
            <h1><?php the_title()?></h1>
        </div>
        <div class="post-meta-row">
             <div class="post-meta ">
                <strong>Author: </strong> <?php the_author(); ?>
            </div>
            <div class="post-meta">
                <strong>Posted On: </strong> <?php the_time(); ?>
            </div>
        </div>
        <div class="post-content">
            <?php the_content()?>
        </div>
</div>
<?php
        endwhile;
    endif;
?>
<?php
get_footer();
?>


