<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    <div id="SiteFooter" class="SiteFooter Text TextSmall TextInvert Link LayoutBreak">
        <div class="LayoutBreakAfter">
            <div class="LayoutGrid-1 LayoutSlimGrid-2 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4><a href="/introduction/">Introduction</a></h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/what-is-crossfit/">what-is-crossfit</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/introduction/">introduction</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/testimonials/">testimonials</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/faq/">faq</a></li>
                    </ul>
                </div>
            </div>
            <div class="LayoutGrid-2 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4><a href="/get-started/">Get Started</a></h4>

                    <h4><a href="/our-programs/">Our Programs</a></h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/overview/">overview</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/group-classes/">group-classes</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/private-classes/">private-classes</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/bar-bell-club/">bar-bell-club</a></li>
                    <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/yoga-for-athletes/">yoga-for-athletes</a></li>
                    </ul>
                </div>
            </div>
            <div class="LayoutGrid-3 LayoutSlimGrid-2 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4><a href="/schedule-and-fees/">Schedule and Fees</a></h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/schedule-and-fees/schedule/">schedule</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/schedule-and-fees/prices/">prices</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/schedule-and-fees/dropping-in/">dropping-in</a></li>
                    </ul>
                </div>
            </div>
            <div class="LayoutGrid-4 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4><a href="/about-us/">About Us</a></h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/staff/">staff</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/community/">community</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/location/">location</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/contact/">contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="LayoutGrid-4 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                   <h4>Meta</h4>
                    <ul class="SiteFooterLinkList">
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </div>
            </div>
            <div class="LayoutGridBreak">
                <div class="LayoutCellSides">
                    <hr>
                </div>
            </div>

            <div class="LayoutGrid-1-4 LayoutSlimGrid-1-2 LinkInvert LinkStrong">
                <div class="LayoutCellSides LayoutCellBottom LinkInvert">
                    <p class="SiteFooterRow TextSmall">Copyright &copy; 2012 CrossFit Falls Church. All rights
                        reserved.</p>
                </div>
            </div>
        </div>

    </div>

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>


</div><!-- class="LayoutP LayoutCenter ArticleGrid" -->

</body>
</html>
