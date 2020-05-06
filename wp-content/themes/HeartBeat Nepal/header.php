<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage SuperMag
 */

/**
 * supermag_action_before_head hook
 * @since SuperMag 1.0.0
 *
 * @hooked supermag_set_global -  0
 * @hooked supermag_doctype -  10
 */
do_action( 'supermag_action_before_head' );?>
	<head>
		<meta property="fb:pages" content="362855347430375" />
		<meta property="fb:pages" content="1641196316154570" />
		<meta content="हार्ट बिट नेपाल एक युवा सोच हो। हामी समाज भित्रका  विभिन्न घटनाक्रम नियाल्ने र शुक्ष्म अध्ययन गरि प्रस्तुत गर्ने कुरामा विश्वास गर्छौ । यो यौटा समाचार संजालको मुटु बन्ने अभियान हो " name="description">
		<meta name="google-site-verification" content="cI8z_VEzXUUqwRmqIuEH5aDxwaQqonXoHIm4NUcBvUI" />
		<title>HeartBeat Nepal</title>


		<?php
		/**
		 * supermag_action_before_wp_head hook
		 * @since SuperMag 1.0.0
		 *
		 * @hooked supermag_before_wp_head -  10
		 */
		do_action( 'supermag_action_before_wp_head' );

		wp_head();
		?>

	</head>
<body <?php body_class();
/**
 * supermag_action_body_attr hook
 * @since SuperMag 1.0.0
 *
 * @hooked supermag_body_attr- 10
 */
do_action( 'supermag_action_body_attr' );?>>

<?php
/**
 * supermag_action_before hook
 * @since SuperMag 1.0.0
 *
 * @hooked supermag_page_start - 10
 * @hooked supermag_page_start - 15
 */
do_action( 'supermag_action_before' );

/**
 * supermag_action_before_header hook
 * @since SuperMag 1.0.0
 *
 * @hooked supermag_skip_to_content - 10
 */
do_action( 'supermag_action_before_header' );

/**
 * supermag_action_header hook
 * @since SuperMag 1.0.0
 *
 * @hooked supermag_after_header - 10
 */
do_action( 'supermag_action_header' );

/**
 * supermag_action_after_header hook
 * @since SuperMag 1.0.0
 *
 * @hooked null
 */
do_action( 'supermag_action_after_header' );

/**
 * supermag_action_before_content hook
 * @since SuperMag 1.0.0
 *
 * @hooked supermag_before_content - 10
 */
do_action( 'supermag_action_before_content' );