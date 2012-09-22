<?php
   /**
   * The Sidebar containing the main widget area.
   *
   * @package WordPress
   * @subpackage Twenty_Eleven
   * @since Twenty Eleven 1.0
   */

   $options = twentyeleven_get_theme_options();
   $current_layout = $options['theme_layout'];

   if ( 'content' != $current_layout ) :
   ?>

        <div id="Sidebar" class="featureBox">
            <aside id="links" class="widget">
                <h3 class="empfehlung">Details</h3>

                <div class="teaser"><a class="kettlebell" href="/"></a>
                    <h4><a title="Benefits" href="/">Home</a></h4>

                    <p>the Workout of the Day</p>
                </div>
                <div class="teaser"><a class="kettlebell" href="/about_us/"></a>
                    <h4><a title="Benefits" href="/about_us/">About Us</a></h4>

                    <p>who we are. what we do. who we serve.</p>
                </div>
                <div class="teaser"><a class="kettlebell" href="/yoga/"></a>
                    <h4><a title="Benefits" href="/yoga/">Yoga for Athletes</a></h4>

                    <p>flexibility, strength, balance, posture</p>
                </div>
                <div class="teaser"><a class="kettlebell" href="/barbell_and_oly_lifting/"></a>
                    <h4><a title="Benefits" href="/barbell_and_oly_lifting/">Olympic Lifting and the Barbell Club</a>
                    </h4>

                    <p>Get stronger with premier coaching</p>
                </div>
                <!--
                <div class="teaser"> <a class="kettlebell" href="/category/kids/"></a>
                  <h4><a title="CF Endurance" href="/cfendurance/">Endurance Training Program</a></h4>
                  <p>our endurance sports training program</p>
                </div>
                -->
                <div class="teaser"><a class="kettlebell" href="/location/"></a>
                    <h4><a title="Location" href="/location/">Location</a></h4>

                    <p>in Shirlington, near Alexandria and DC</p>
                </div>
                <!--
                <div class="teaser"> <a class="kettlebell" href="/paleo/"></a>
                  <h4><a title="Paleo Diet" href="/paleo/">Paleo Diet</a></h4>
                  <p>fuel your work. take the challenge.</p>
                </div>
                -->
                <div class="teaser"><a class="kettlebell" href="/contact_us/"></a>
                    <h4><a title="Paleo Diet" href="/contact_us/">Contact</a></h4>

                    <p>let us answer your questions/concerns</p>
                </div>
                <div class="sb_termine">
                    <!-- flickr -->
                    <div id="flickr_badge_uber_wrapper">
                        <div id="flickr_badge_wrapper">
                            <script type="text/javascript"
                                    src="http://www.flickr.com/badge_code_v2.gne?show_name=1&amp;count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=49396649%40N07"></script>
                            <div class="flickr_badge_image" id="flickr_badge_image1"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165239788/"><img
                                    src="http://farm8.staticflickr.com/7105/7165239788_190d3f617f_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1194" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image2"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165360610/"><img
                                    src="http://farm8.staticflickr.com/7092/7165360610_082f0939ff_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1291" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image3"><a
                                    href="http://www.flickr.com/photos/cfadaptation/6998859280/"><img
                                    src="http://farm8.staticflickr.com/7092/6998859280_527d841e2e_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1160" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image4"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165233528/"><img
                                    src="http://farm6.staticflickr.com/5040/7165233528_e4c363e22f_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1179" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image5"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165332008/"><img
                                    src="http://farm9.staticflickr.com/8154/7165332008_f251ae8071_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1223" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image6"><a
                                    href="http://www.flickr.com/photos/cfadaptation/6998859592/"><img
                                    src="http://farm6.staticflickr.com/5040/6998859592_49695a61ae_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1162" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image7"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165326238/"><img
                                    src="http://farm6.staticflickr.com/5467/7165326238_78edc98163_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1208" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image8"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165350368/"><img
                                    src="http://farm8.staticflickr.com/7092/7165350368_ea0be4d013_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1274" height="75" width="75"></a></div>
                            <div class="flickr_badge_image" id="flickr_badge_image9"><a
                                    href="http://www.flickr.com/photos/cfadaptation/7165347294/"><img
                                    src="http://farm8.staticflickr.com/7213/7165347294_4ef9febfe3_s.jpg"
                                    alt="A photo on Flickr" title="DSCF1269" height="75" width="75"></a></div>
                            <span style="position:absolute;left:-999em;top:-999em;visibility:hidden"
                                  class="flickr_badge_beacon"><img
                                    src="http://geo.yahoo.com/p?s=792600102&amp;t=fd6e3c1127eda855a6a6353ee957e8de&amp;r=http%3A%2F%2Fwww.crossfitadaptation.com%2F&amp;fl_ev=0&amp;lang=en&amp;intl=us"
                                    width="0" height="0" alt=""></span>

                            <div id="flickr_badge_source">
                                <div id="flickr_icon_td">&nbsp;</div>
                                <div id="flickr_badge_source_txt">Go to <a
                                        href="http://www.flickr.com/photos/cfadaptation/">CFA's photostream</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Flickr Badge -->
                    <!-- /flickr -->
                </div>
                <!-- CFAVideoChannel -->
                <div style="padding:20px 0 0 50px;">
                    <a href="http://www.youtube.com/subscription_center?add_user=CFAVideoChannel&amp;feature=creators_cornier-http%3A//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_grey.png"><img
                            src="http://s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_grey.png"
                            alt="Subscribe to me on YouTube"></a><img
                        src="http://www.youtube-nocookie.com/gen_204?feature=creators_cornier-http%3A//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_grey.png"
                        style="display: none">
                </div>
            </aside>
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


            <aside id="meta" class="widget">
                <h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </aside>

            <?php endif; // end sidebar widget area ?>
        </div><!-- sidebar -->
    </div><!-- end content -->

<?php endif; ?>
