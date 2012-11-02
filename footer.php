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
                    <h4>Introduction</h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/what-is-crossfit/">What is CrossFit?</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/introduction/">Introduction</a></li>
                      <!-- <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/testimonials/">Testimonials</a></li> -->
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/introduction/faq/">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="LayoutGrid-2 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4><a href="/get-started/">Get Started</a></h4>
                </div>
            </div>
            <div class="LayoutGrid-2 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4>Our Programs</h4>
                    <ul class="SiteFooterLinkList">
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/overview/">Overview</a></li>
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/group-classes/">Group Classes</a></li>
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/private-classes/">Private Classes</a></li>
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/bar-bell-club/">Adaptation Barbell Club</a></li>
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/our-programs/yoga-for-athletes/">Yoga for Athletes</a></li>
                    </ul>
                    </div>
                </div>

            <div class="LayoutGrid-3 LayoutSlimGrid-2 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4>Schedule and Fees</h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/schedule-and-fees/schedule/">Schedule</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/schedule-and-fees/prices/">Prices</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/schedule-and-fees/dropping-in/">Drop Ins</a></li>
                    </ul>
                </div>
            </div>
            <div class="LayoutGrid-4 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4>About Us</h4>
                    <ul class="SiteFooterLinkList">
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/staff/">Staff</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/community/">Community</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/location/">Location</a></li>
                      <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat" href="/about-us/contact/">Contact</a></li>
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
