<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * This page will be displayed when "Static page" is selected in Reading.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sillyemu
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main wrapper" role="main">
        <?php if (have_posts()) : ?>
        <div class="container">
            <div class="columns is-multiline">
                <?php while (have_posts()) : the_post(); ?>
                <div class="column is-one-third">
                    <p>Test</p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php else: ?>
            <p>Test</p>
        <?php endif; ?>
    </main> <!-- #main -->
</div> <!-- #primary -->

<!-- Include the sidebar -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
