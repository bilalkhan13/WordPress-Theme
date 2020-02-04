<?php
/**
 * Header.php
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
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <title>
    <?php echo get_the_title();?> |
    <?php bloginfo("name")?>
    </title>
    <?php include_once 'function.php'; ?>
    <?php wp_head()?>
    
</head>
<body>
<div class="site-main container">
<header class="site-header">
<div class="site-branding">
<nav class="site-navigation">
</nav>
</div>
</header>
</div>

<!-- <script type="text/javascript">
jQuery(document).ready(function($){
$("img").fadeOut();
});
</script> -->