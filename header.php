<?php
/**
 * The Header for the CFFC theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<!DOCTYPE html>

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

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width">

<title>

<?php
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

	?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>

<script type="text/javascript" src="/wp-content/themes/crossfit_fallschurch_theme/basic.js"></script>

<script src="/wp-content/themes/crossfit_fallschurch_theme/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<script type="text/javascript" src="//use.typekit.net/kma6wiy.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- THE FONT I NEED -->
<link href='http://fonts.googleapis.com/css?family=Jura:600,400' rel='stylesheet' type='text/css'>
<!-- /END FONT -->

</head>

<body class="Text TextMedium Link">

<div class="SiteHeader Text TextSmall LayoutBreakAfter">

    <div id="SiteLogo">
        <!-- <a href="/" style="border:none;"><img src="/wp-content/themes/crossfit_fallschurch_theme/CFFC_Logo/top_logo.png"></a> -->
        <a href="/" style="border:none;"><img src="/wp-content/themes/crossfit_fallschurch_theme/CFFC_Logo/top-bar_for_page.png"></a>
    </div>

    <div class="SiteHeaderBar" id="shBar">
        <div class="SiteHeaderDropdownLink SiteHeaderBarItem SiteHeaderBarItemFirst" id="introduction_panel">
            <a href="/introduction/" id="introduction_link" class="SiteHeaderBarLink" style="">Introduction</a>
            <div class="SiteHeaderDropPanel" id="IntroductionPanel" style="display: none;">
                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="intro1">
                    <span class="SiteHeaderPanelHeader"><a href="/introduction/what-is-crossfit/">What is CrossFit?</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="intro2">
                    <span class="SiteHeaderPanelHeader"><a href="/introduction/testimonials/">Testimonials</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="intro3">
                    <span class="SiteHeaderPanelHeader"><a href="/introduction/faq/">FAQ</a></span>
                </div>

            </div>
        </div>

        <a href="/get-started/" id="get_started" class="SiteHeaderBarItem SiteHeaderBarLink">Get Started</a>

        <div class="SiteHeaderDropdownLink SiteHeaderBarItem SiteHeaderBarItemFirst" id="our_programs_panel">
            <a href="/our-programs/" id="our_programs" class="SiteHeaderBarLink" style="">Our Programs</a>
            <div class="SiteHeaderDropPanel" id="OurProgramsPanel" style="display: none; ">
                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="programs1">
                    <span class="SiteHeaderPanelHeader"><a href="/our-programs/overview/">Overview</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="programs2">
                    <span class="SiteHeaderPanelHeader"><a href="/our-programs/group-classes/">Group Classes</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="programs3">
                    <span class="SiteHeaderPanelHeader"><a href="/our-programs/private-classes/">Private Classes</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="programs4">
                    <span class="SiteHeaderPanelHeader"><a href="/our-programs/bar-bell-club/">BB Club</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="programs5">
                    <span class="SiteHeaderPanelHeader"><a href="/our-programs/yoga-for-athletes/">Yoga</a></span>
                </div>

            </div>
        </div>

        <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="schedule_and_fees_panel">
            <a href="/schedule-and-fees/" class="SiteHeaderBarLink" id="schedule_and_fees" style="">Schedule & Fees</a>
            <div class="SiteHeaderDropPanel" id="StorePanel" style="display: none; ">
                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="schedule_and_fees1">
                    <span class="SiteHeaderPanelHeader"><a href="/schedule-and-fees/schedule/">Class Schedule</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="schedule_and_fees2">
                    <span class="SiteHeaderPanelHeader"><a href="/schedule-and-fees/prices/">Prices</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="schedule_and_fees3">
                    <span class="SiteHeaderPanelHeader"><a href="/schedule-and-fees/dropping-in/">Dropping In</a></span>
                </div>
            </div>
        </div>

        <div class="SiteHeaderDropdownLink SiteHeaderBarItem" id="about_us_panel">
            <a href="/about-us/" class="SiteHeaderBarLink" id="about_usLink" style="">About Us</a>
            <div class="SiteHeaderDropPanel" id="AboutUsPanel" style="display: none;">

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us1">
                    <span class="SiteHeaderPanelHeader"><a href="/about-us/staff/">Staff</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us2">
                    <span class="SiteHeaderPanelHeader"><a href="/about-us/community/">Our Community</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us3">
                    <span class="SiteHeaderPanelHeader"><a href="/about-us/location/">Location</a></span>
                </div>

                <div class="SiteHeaderPanelRow SiteHeaderPanelLink" id="about_us4">
                    <span class="SiteHeaderPanelHeader"><a href="/about-us/contact/">Contact</a></span>
                </div>

            </div>
        </div>

    </div><!-- site header bar -->

</div><!-- SiteHeader -->

    

