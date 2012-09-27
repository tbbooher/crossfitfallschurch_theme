<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25308652-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- don't know why i need this -->

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/smoothness/jquery-ui.css">

<!-- end tim modification -->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
<script src="/wp-content/themes/crossfit_fallschurch_theme/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Jura:600,400' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>

<div class="SiteHeader Text TextSmall">

        <div class="SiteHeaderBar" id="shBar">
            <div class="SiteHeaderDropdownLink SiteHeaderBarItem SiteHeaderBarItemFirst" id="shProducts">
                <a href="/products/catalog.html" id="shProductsLink" class="SiteHeaderBarLink" style="">What is CrossFit?</a>
                <div class="SiteHeaderDropPanel" id="ProductsPanel" style="display: none; ">
                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shProducts3">
                        <span class="SiteHeaderPanelHeader"><a href="/products/acrobat.html?promoid=JOLIR">Introduction</a></span>
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shProducts9">
                        <span class="SiteHeaderPanelHeader"><a href="/products/creativecloud.html?promoid=JQPEQ">Testimonials</a></span>
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shProducts1">
                        <span class="SiteHeaderPanelHeader"><a href="/products/creativesuite.html?promoid=JOLIS">FAQ</a></span>
                    </div>

                </div>
            </div>

            <a href="/go/gnav_learning_en_us" id="shLearning" class="SiteHeaderBarItem SiteHeaderBarLink">Get Started</a>

            <div class="SiteHeaderDropdownLink SiteHeaderBarItem SiteHeaderBarItemFirst" id="shSolutions">
                <a href="/solutions.html" id="shSolutionsLink" class="SiteHeaderBarLink" style="">Our Programs</a>
                <div class="SiteHeaderDropPanel" id="SolutionsPanel" style="display: none; ">
                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shSolutions8">
                        <span class="SiteHeaderPanelHeader"><a href="/products/creativesuite/companies.html?promoid=JZVVU">Overview</a></span>
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shSolutions5">
                        <span class="SiteHeaderPanelHeader"><a href="/marketing/?promoid=JOLIX">Group Classes</a></span>
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shSolutions1">
                        <span class="SiteHeaderPanelHeader"><a href="/digital-media/?promoid=JOLIY">Private Classes</a></span>
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shSolutions2">
                        <span class="SiteHeaderPanelHeader"><a href="/education.html?promoid=JOLIZ">BB Club</a></span>
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="shSolutions3">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_solutions_financialservices_en_us">Yoga</a></span>
                    </div>

                </div>
            </div>

            <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="schedule_and_fees">
                <a href="/go/gnav_store_en_us" class="SiteHeaderBarLink" id="schedule_and_feesLink" style="">Schedule & Fees</a>
                <div class="SiteHeaderDropPanel" id="StorePanel" style="display: none; ">
                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="schedule_and_fees1">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_homeuse_en_us">Class Schedule</a></span>
                        for personal and home office
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="schedule_and_fees2">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_education_en_us">Fees</a></span>
                        for students, educators, and staff
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="schedule_and_fees3">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_business_en_us">Dropping In</a></span>
                        for small and medium businesses
                    </div>

                </div>
            </div>

            <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="about_us">
                <a href="/go/gnav_store_en_us" class="SiteHeaderBarLink" id="about_usLink" style="">About Us</a>
                <div class="SiteHeaderDropPanel" id="About_us_Panel" style="display: none; ">
                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us1">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_homeuse_en_us">Our Staff</a></span>
                        for personal and home office
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us2">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_education_en_us">Our Community</a></span>
                        for students, educators, and staff
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us3">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_business_en_us">Location</a></span>
                        for small and medium businesses
                    </div>

                    <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us4">
                        <span class="SiteHeaderPanelHeader"><a href="/go/gnavtray_store_business_en_us">Contact</a></span>
                        for small and medium businesses
                    </div>

                </div>
            </div>

        </div>
    </div>


<div class="LayoutP LayoutCenter ArticleGrid">
    
    <div id="SiteHeader">
        <img src="/wp-content/themes/crossfit_fallschurch_theme/CFFC_Logo/top_logo.png" style="margin-left:-10px;">
    </div>
