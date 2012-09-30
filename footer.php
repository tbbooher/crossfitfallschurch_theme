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


    <div id="SiteFooter" class="Text TextSmall TextInvert">
        <div class="LayoutBreakAfter">
            <div class="LayoutGrid-1 LayoutSlimGrid-1 LinkInvert">
                <div class="LayoutCellSides LayoutCellTop">
                    <h4><a href="/products/catalog.html?promoid=JOPBT">Products</a></h4>
                    <ul class="SiteFooterLinkList">
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts SiteFooterMenuItemIconAcrobat"
                               href="/products/acrobat.html?promoid=JOPBV">Acrobat</a></li>
                        <li><a class="icon Icon SiteFooterMenuItemIconProducts"
                               href="/education/students.edu.html?showEduReq=no&amp;promoid=JUTMH">Student and Teacher
                            Editions</a></li>
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

</body>
</html>
