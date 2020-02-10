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
    <div class="custom-header">
       <img src= "<?php header_image();?>" width="<?php echo absint(get_custom_header())->width ?>"
       weight="<?php echo absint(get_custom_header())->height ?>" class="img-fluid">
    </div>
    <div class="row mr-0 ml-0">
        <div class="home-posts col-8">
    <!--Display Content via loop-->
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
        <article class="home-post">
            <div class="post-header">
                <div class="post-thumbnail row ml-0 mr-0">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                </div>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
            </div>
            <div class="post-description">
                <?php the_excerpt(); ?>
            </div>
            <div class="post-footer row ml-0 mr-0">
                <div class="post-meta">
                    <strong>Author: </strong> <?php the_author(); ?>
                </div>
                <div class="post-meta">
                    <strong>Posted On: </strong> <?php the_time(); ?>
                </div>
            </div>
        </article>
    <?php
        endwhile;
    endif;
    ?>
    <div class="pagination row ml-0 mr-0">
        <?php echo paginate_links() ?>
    </div>
    
    </div>
    <div class="home-sidebar col-lg-4">
        <?php get_sidebar();?>
        </div>
    </div>
 </div>

<?php
get_footer();
?>

