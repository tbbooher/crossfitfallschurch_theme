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
            <div class="ArticleGrid-1-4" style="margin-left:auto; margin-right: auto; width: 100%; float: none;">
                <div>
                    <div id="slider" class="nivoSlider">
                        <a href="/get-started/">
                          <img src="/wp-content/themes/crossfit_fallschurch_theme/images/front_page/_community.jpg" alt="" >
                        </a>
                        <a href="/get-started/">
                          <img src="/wp-content/themes/crossfit_fallschurch_theme/images/front_page/_professional_staff.jpg" alt="" >
                        </a>
                        <a href="/get-started/">
                          <img src="/wp-content/themes/crossfit_fallschurch_theme/images/front_page/_free_workout.jpg" alt="" >
                        </a>
                    </div>
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>
                <script type="text/javascript">
                    jQuery(window).load(function() {
                        jQuery('#slider').nivoSlider({
                         effect: 'fade',
                         randomStart: false,
                         pauseOnHover: true
                         });
                         // animSpeed: 4000
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
                        <h1 class="entry-title">
                            <?php _e( 'Nothing Found', 'twentyeleven' ); ?>
                        </h1>
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
                    <h2 style="font-size:2em;">Why CFFC?</h2>
                    <ul class="dash-list">
			    <li>Fitness programs for all skill levels</li>
			    <li>Experienced, knowledgeable coaches</li>
			    <li>Family-friendly community</li>
			    <li>Commitment to your success</li>
                    </ul>
                    <p style="padding-top:12px"><a href="http://cfa_cffc.wodify.com/OnlineSalesPortal/Homepage.aspx?IsMobile=False&OriginalURL=">Sign Up Now</a></p>

                    <h2>News</h2>
                    <?php $recent = new WP_Query("page_id=686"); while($recent->have_posts()) : $recent->the_post();?> <?php the_content(); ?> <?php endwhile; ?>

                    <h2>Community</h2>
                    <ul class="horizontal">
                        <li>
                            <a href="http://www.facebook.com/CrossFitFallsChurch">
                              <img src="/wp-content/themes/crossfit_fallschurch_theme/images/facebook.png" width="64px" height="64px" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.flickr.com/photos/crossfitfallschurch/">
                              <img src="/wp-content/themes/crossfit_fallschurch_theme/images/flickr.png" width="64px" height="64px" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.youtube.com/user/CFAVideoChannel">
                              <img src="/wp-content/themes/crossfit_fallschurch_theme/images/youtube.png" width="64px" height="64px" alt="Facebook">
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <p>
                      <a href="http://journal.crossfit.com/start.tpl?version=CFJ-black123x63" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource">
                        <img src="http://journal.crossfit.com/templates/images/black-125x63.png" width="125px" height="63px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" />
                      </a>
                    </p>
                    <p>
                      <a href="http://www.crossfitadaptation.com/">
                        <img src="/wp-content/themes/crossfit_fallschurch_theme/images/front_page/sweatlogo.gif" alt="CrossFit Adaptation" width="200px" height="92px">
                      </a>
                    </p>
                    <p style="padding-top:20px;">
                      <a href="http://www.thejacksonclinics.com/services/health/crossfit-program">
                        <img src="/wp-content/themes/crossfit_fallschurch_theme/images/tjc_web_banner.jpg" alt="the jackson clinics" width="150" height="100" title="The Jackson Clinics" style="border:1px solid black;">
                      </a>
                    </p>
                    <!-- POWER SUPPLY LOGO -->
                    <p style="padding-top:19px;">
                      <a href="http://dc.mypowersupply.com/">
                        <img src="/wp-content/themes/crossfit_fallschurch_theme/images/powersupply-crest.png" alt="catalyst meals" width="170" height="69" title="Power Supply Meals" style="border:none;">
                      </a>
                    </p>
                    <!-- CUSTOM FIT MEALS LOGO custom_fit_meals.jpg -->
                    <p style="padding-top:20px;">
                      <a href="https://tri.freshmealplan.com/">
                        <img src="/wp-content/themes/crossfit_fallschurch_theme/images/fresh_meal.gif" alt="Fresh Meals" title="Custom Fit Meals" style="border:none;">
                      </a>
                    </p>
                    <hr>
                    <ul class="SiteFooterLinkList">
                      <li style="list-style-type: none;"><?php get_search_form(); ?></li>
                    </ul>
                </div>
            </div><!-- ArticleGrid -->
        </div><!-- LayoutBreakAfter -->
    </div><!-- LayoutRowLink -->

<?php get_footer(); ?>
