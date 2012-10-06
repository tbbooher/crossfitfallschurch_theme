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

            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

            <?php endif; // end sidebar widget area ?>
            <h3>Announcements</h3>

            <h3>Pictures</h3>

            <h3>Videos</h3>

        </div><!-- sidebar -->
    </div><!-- end content -->

<?php endif; ?>
