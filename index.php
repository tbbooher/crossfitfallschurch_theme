<?php
   /**
   * The main template file.
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   * Learn more: http://codex.wordpress.org/Template_Hierarchy
   *
   * @package WordPress
   * @subpackage Twenty_Eleven
   */

   get_header(); ?>
<div class="LayoutP LayoutCenter ArticleGrid">
    <div class="LayoutRow Link">
        <div class="LayoutBreakAfter">
            <div class="ArticleGrid-1-4" style="margin-left:auto; margin-right: auto; width: 750px; float: none;">
                <div>
                    <div id="slider" class="nivoSlider">
                        <img src="/wp-content/themes/crossfit_fallschurch_theme/images/front_page/front_page_image1.jpg" alt="" >
                        <img src="/wp-content/themes/crossfit_fallschurch_theme/images/front_page/front_page_image2.jpg" alt="" >
                    </div>
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>
                <script type="text/javascript">
                    jQuery(window).load(function() {
                        jQuery('#slider').nivoSlider({effect: 'fade', randomStart: true});
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="LayoutRow Link">
        <div class="LayoutBreakAfter">
            <div class="ArticleGrid-1-3" id="main">

                <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>

                <?php twentyeleven_content_nav( 'nav-below' ); ?>

                <?php else : ?>

                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

                <?php endif; ?>
            </div><!-- ArticleGrid -->
            <div class="ArticleGrid-4">
                <div id="infobar">
                    <h2>Why CFFC?</h2>
                    <p>
                    Phasellus porttitor imperdiet ipsum et adipiscing. Vivamus vel diam diam. Nam non tellus mauris. Nullam commodo luctus suscipit. Praesent id elit a nisi rhoncus pellentesque. Proin rhoncus dapibus tortor, ut blandit lorem ornare nec. Curabitur laoreet tellus tristique tortor gravida id bibendum odio pharetra. Nullam libero quam, molestie hendrerit vehicula eget, semper ut tortor. Duis ut dolor neque. Donec auctor ipsum quis felis scelerisque nec mattis orci scelerisque.
                    </p>
                    <h2>News</h2>
                    <p>
                        Integer auctor porta dolor in molestie. Praesent semper sapien nisi, at viverra ipsum.
                    </p>
                    <h2>Community</h2>
                    <ul>
                        <li>Flickr Badge</li>
                        <li>YouTube</li>
                        <li>Facebook Stuff</li>
                    </ul>
                </div>
            </div><!-- ArticleGrid -->
        </div><!-- LayoutBreakAfter -->
    </div><!-- LayoutRowLink -->

<?php get_footer(); ?>
