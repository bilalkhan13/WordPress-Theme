<?php
/**
 * Footer.php
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
?>

<footer class="site-footer">
    <div class="row ml-0 mr-0 footer-widgets">
        <div calss="widget widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div calss="widget widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div calss="widget widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php dynamic_sidebar('footer-3'); ?>
        </div>
    </div>
</footer>
</div> <!-- Closing Main Container-->
</body>
<?php wp_footer() ?> 
</html>