<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Poil aux dents
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="<?php bloginfo('name'); ?>">

	<meta name="theme-color" content="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<?php wp_head(); ?>

	<!-- Favicons
	================================================== -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/favicons/favicon-16x16.png">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicons/ms-icon-144x144.png">
	<script>var $ = jQuery;</script>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<header id="header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" title="<?php bloginfo(''); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 554.1 150"><path d="M109.7 78c2.7-7.3 4.8-14.8 6.4-22.4 1.4-7 2.7-15.1 1.8-23-1.4-11.3-9.2-22.2-20-27.5-4.1-2.1-8.6-3.3-13.2-3.3-6.2 0-12.6 2-18.4 5.9-1.7 1.2-3.5 2.4-5.1 3.6l-.3.3c-.6.5-1.7.5-2.3 0-2-1.5-4.4-3.3-6.5-4.5-4.5-2.6-9.8-3.9-15.6-3.9-6.4 0-12.7 1.7-18.4 4.7C7.2 13.8 1.3 25.4 2 39.2 2.8 54 7 69.6 14.7 87.1c5.6 12.4 11.9 23.3 18.9 32.2 2.1 2.6 4.4 5.3 7 7.3 1.1.8 2.4 1.2 3.8 1.2 1.2 0 2.4-.3 3.2-1.1 1.4-1.1 1.4-5.1 1.2-7.6v-2.4c.6-10.1 2.3-18.1 5.4-25.4 1.8-4.1 3.8-7.9 5.1-10.4.3-.6.9-.9 1.7-.9.8 0 1.4.3 1.7.9 2.4 4.4 4.1 7.9 5.4 11.2 3.3 8.2 4.2 17.1 4.5 25.4v.8c.2 4.5.3 7.7 3.8 10.4.3.3.6.3.8.3 1.1 0 2.4-1.2 3.3-2.1l.2-.2c3.3-3 6.2-6.8 8.8-10.4 8.1-10.9 14.7-23.8 20.2-38.3z" fill="#fff"/><path d="M211.9 39c-.8-.2-1.4.2-2.1.6-.6.5-.9 1.2-.9 2.6l-.5 61.4c0 .9.3 1.5.8 1.8.5.5 1.1.6 1.7.8.6 0 1.2-.2 2-.5.6-.5 1.2-.9 1.5-1.7l.5-62c0-.6-.3-1.2-.9-1.8-.7-.7-1.3-1-2.1-1.2zm-12.5 8.6c-1.1-4.1-2.4-7.7-4.1-10.9-1.4-2.1-2.9-3.6-4.4-4.4-1.5-.9-3.2-1.2-4.8-1.1-1.7.2-3.3.6-4.8 1.5-1.7.9-3 2-4.4 3.3-1.4 1.4-2.6 2.7-3.5 4.2s-1.7 3-2 4.4c-.8 3.5-1.2 7-1.5 10.9-.3 3.8-.5 7.7-.5 11.6s.3 7.7.6 11.5c.5 3.8 1.1 7.3 1.8 10.4.9 3.2 1.8 6 3 8.6 1.2 2.6 2.7 4.4 4.4 5.7 2.6 1.7 5.1 2.4 7.3 2.3 2.3-.3 4.2-1.2 6-3 1.8-1.8 3.3-4.2 4.7-7.3 1.2-3 2.3-6.5 3-10.3.8-3.8 1.2-7.9 1.5-12.2.2-4.2.2-8.6-.3-12.9-.2-4-1-8.2-2-12.3zm-4.7 27.7c-.2 3.6-.6 6.8-.9 9.7-.5 2.9-.9 5.3-1.4 7.3-.6 2-1.1 3.2-1.7 3.8-.8 1.5-1.7 2.4-2.9 3s-2.4.5-3.8-.3-2.6-2.1-3.9-4.4c-1.2-2.1-2.4-5.1-3.2-9.1-.9-3.9-1.4-8.8-1.5-14.5-.2-5.7.2-12.7.9-20.6.6-3.2 1.7-5.7 3-7.7 1.4-2 2.9-3.3 4.5-3.9 1.7-.6 3.2-.5 4.8.3 1.5.9 2.7 2.6 3.6 5 .9 2.9 1.5 6 1.8 9.5.5 3.5.6 7.1.8 10.9.2 3.7.2 7.4-.1 11zm-36-41.4c-1.8-1.7-3.8-2.9-6-3.5-2.3-.6-4.2-.6-6-.2-1.8.5-3.3 1.4-4.2 2.7-1.1 1.4-1.2 3.2-.6 5.4l.5 64.7c0 .8.2 1.2.6 1.7.5.3.8.6 1.4.6.5.2.9 0 1.5-.2.5-.2.9-.6 1.2-1.1.3-3 .5-6 .6-9.5.2-3.3.2-6.8.2-10.3s-.2-6.8-.2-10.1-.2-6.5-.2-9.4c.5-.2 1.1-.2 2-.3.9 0 1.8-.2 2.9-.3 1.1-.2 2.1-.5 3.3-.9 1.2-.5 2.3-1.1 3.3-2 1.1-.9 2-2.1 2.9-3.6s1.5-3.5 2-5.9c.6-4.4.5-8-.6-11-1.3-2.7-2.7-5-4.6-6.8zm-.8 18.6c-.9 2-2.1 3.5-3.9 4.7-1.7 1.2-3.9 1.7-6.5 1.2v-4.8c0-1.9-.2-3.9-.3-6-.2-2.1-.2-3.9-.3-5.9-.2-1.8-.2-3.3-.3-4.4 2.7-1.2 5-1.4 7-.6 1.8.8 3.2 2 4.1 3.6.9 1.7 1.4 3.6 1.5 5.9-.1 2.2-.5 4.3-1.3 6.3zm57.8-24.8c-1.4-1.5-2.7-2.3-3.9-2.1s-2.3.6-3 1.7c-.8.9-1.2 2.1-1.4 3.3-.2 1.4.2 2.3 1.1 3 1.8 1.2 3.3 1.5 4.5 1.2 1.2-.3 2.1-.9 2.7-1.8.6-.9.9-2 .9-3 0-1.1-.3-1.9-.9-2.3zm152.4 72.1c-2.1-3.5-4.1-7.3-5.9-11.2-1.8-3.9-3.5-8-4.8-12.2-1.5-4.1-2.9-8.3-4.2-12.4-1.4-4.1-2.6-8-3.6-11.8l9.7-19.5c-.2-.5-.5-.9-.9-1.4-.5-.5-1.1-.8-1.7-.9-.6-.2-1.2-.3-1.7-.2-.5 0-.9.3-1.1.8l-8.3 14.1c-.9-.6-1.7-1.7-2.6-3-.9-1.4-1.7-2.7-2.6-4.2-.9-1.5-1.8-2.7-2.7-4.1-.9-1.2-1.8-2.1-2.9-2.6-1.8-.9-3.2-.8-3.8 0-.6.9-.6 2 0 3.3.2.5.6 1.1 1.2 1.8l2 3c.8 1.2 1.7 2.4 2.4 3.8.9 1.4 1.7 2.6 2.4 3.8.8 1.2 1.5 2.1 2.1 3 .6.9 1.1 1.5 1.2 1.8l-14.5 50.1c-.3.6-.2 1.2.2 1.8.5.6.9.9 1.5 1.2.6.3 1.4.5 2.1.5.8 0 1.4-.3 1.7-.9l12.9-41.9c1.2 3.5 2.4 7.1 3.8 11 1.4 3.8 2.9 7.7 4.4 11.5 1.5 3.8 3.2 7.4 4.8 10.9 1.7 3.5 3.2 6.7 4.8 9.4 1.2.3 2.1.3 2.9.2.8-.3 1.2-.6 1.7-1.2.3-.6.5-1.2.5-2.1-.4-.7-.5-1.5-1-2.4zm115.2-68.5c-1.8-.9-3.6-1.5-5.7-1.5-2.1-.2-4.1.2-6 .6-2 .6-3.8 1.4-5.4 2.7-1.7 1.2-3 2.7-3.9 4.4.8-2.6.8-4.4.3-5.4-.6-1.2-1.4-1.8-2.3-2-.9-.2-1.8.2-2.6.9-.8.8-1.1 1.7-.9 2.9l1.8 69.1c-.2.3 0 .6.5 1.1s1.2.6 2 .8 1.5.2 2.3 0c.8-.2 1.2-.8 1.5-1.5V57.2c0-3.9.5-7.4 1.5-10.3 1.1-3 2.3-5.3 3.8-7.1 1.5-1.8 3-2.9 4.8-3.5 1.7-.6 3.3-.5 4.7.5 1.5.8 2.6 2.3 3.5 4.5.9 2.3 1.2 5.3 1.1 9.2l-.5 53.7c0 .6.5 1.1.9 1.5.6.3 1.2.5 1.8.5.6 0 1.4-.3 2-.8s1.1-1.2 1.2-2.1l1.2-60.6c-.5-2.7-1.4-5-2.6-7-1.6-2.1-3.3-3.5-5-4.4zm42.1 4.5l-11.8.3.2-12.9c-1.7-.5-3-.8-4.1-.8-1.1 0-1.8.6-2 2l-.3 12.1h-10.6c-.6 1.8-.9 3.3-.8 4.4s.6 1.7 1.7 2h9.8c-.5 11.3-.5 20.9-.5 28.7.2 7.9.5 14.4 1.1 19.7.6 5.3 1.4 9.4 2.3 12.4.9 3 2.1 5.4 3.5 7.1 1.4 1.7 2.9 3 4.5 3.8 1.7.8 3.5 1.4 5.6 2.1.9.3 1.5 0 1.7-.9.2-.9.3-2 .2-3-.2-1.1-.3-2.1-.6-3-.3-.9-.6-1.2-.9-.9-1.8-.6-3.5-1.4-4.7-2.1-1.2-.8-2.4-2-3.2-3.6-.9-1.7-1.5-3.9-2-6.8s-.8-6.7-.9-11.3c-.2-4.7-.2-10.6-.2-17.5.2-7 .3-15.3.6-25.1l10.7-.6c.8 0 1.2-.3 1.7-.9.5-.6.6-1.2.6-2s0-1.4-.3-2c-.6-.9-.9-1.2-1.3-1.2zm-95.3 17.4c3.3-.9 6.7-1.5 10-1.8 3.3-.2 6.7-.5 10-.6 1.2-2.6 1.5-5 .8-7.6-.6-2.6-2-4.8-3.6-6.7-1.8-2-3.9-3.3-6.4-4.1-2.4-.9-4.8-.9-7.3.2-2.4.9-4.5 2.9-6.4 5.9-2 3-3.2 7.6-3.8 13.5-.2 2-.5 4.4-.6 7.3-.3 2.9-.5 6-.5 9.5s.2 7 .5 10.6c.3 3.6.9 7.1 1.8 10.3.9 3.3 2.1 6.2 3.8 8.9 1.7 2.7 3.8 4.7 6.5 6.2 2.9.5 5.3.3 7.4-.3 2-.6 3.6-1.4 4.8-2.3 1.2-.9 2.1-2 2.6-3.2.5-1.2.6-2.1.5-2.7-.2-.8-.8-1.1-1.7-1.1s-2 .6-3.5 1.8c-3.2 1.2-5.9 1.4-8 .3-2.1-1.1-3.8-2.7-5-5.3-1.2-2.4-2.1-5.4-2.6-8.9s-.8-7.1-.8-10.7c0-3.6.2-7.3.5-10.6.4-3.4.7-6.3 1-8.6zm2.6-11.8c.9-1.2 1.8-2.1 3-2.6 1.1-.5 2.3-.5 3.5 0 1.2.3 2.3.9 3 1.7.9.8 1.5 1.7 1.8 2.6.3.9.3 1.8-.3 2.6L431 47.2c.2-2.6.8-4.6 1.7-5.8zM226.9 31.1c-.6-.5-1.2-.6-2-.6s-1.4.2-2 .6c-.6.5-.9 1.1-.9 1.8l-.2 72c0 .8.3 1.2.9 1.4.6.2 1.4.2 2.1 0 .8-.2 1.4-.5 2.1-.9.6-.5.9-.9.9-1.5l-.2-70.8c.2-.9-.1-1.5-.7-2zm326.4 56.3c-.6-3-1.5-6-2.7-9.2s-2.6-6.4-4.1-9.4c-1.5-3.2-3-6.2-4.4-9.1-1.4-2.9-2.7-5.4-3.8-7.9-1.1-2.4-1.8-4.4-2.3-6-.6-2.6-.6-4.5.2-5.7.8-1.2 1.7-1.8 3-2.1 1.4-.3 2.7-.3 4.4.2 1.5.3 2.9.8 3.9 1.2.6.3 1.2.2 1.8-.2s1.2-.8 1.7-1.4c.5-.6.6-1.2.6-2s-.3-1.4-.9-2.1c-2.1-1.2-4.4-2.1-6.4-2.4-2.1-.3-4.1-.2-5.7.3-1.8.5-3.3 1.4-4.8 2.4-1.4 1.2-2.6 2.4-3.3 3.9s-1.2 3.2-1.2 5c0 1.8.3 3.6 1.2 5.6 2.6 5.1 4.8 9.7 6.8 13.6 1.8 3.9 3.5 7.4 4.7 10.3 1.2 3 2.1 5.6 2.9 7.9.8 2.3 1.2 4.1 1.7 5.7.5 1.7.6 3 .8 4.2.2 1.2.2 2.3.3 3.3-.3 2-.9 3.5-1.7 4.5s-1.7 1.7-2.7 1.8c-1.1.2-2.1 0-3.3-.6-1.2-.6-2.3-1.5-3.5-2.7-.6-.6-1.4-.9-2.1-.9s-1.5.2-2.1.5c-.6.5-1.1.9-1.4 1.7-.3.8-.2 1.5.3 2.6.2.2.6.6 1.2 1.4.6.8 1.5 1.4 2.7 2.1 1.1.8 2.3 1.4 3.8 2 1.4.6 2.9.8 4.5.6 3.3-.9 5.9-2.4 7.6-4.2 1.7-1.8 2.7-4.1 3.2-6.5-.3-2.8-.3-5.5-.9-8.4zM279.9 90c-.6-1.5-1.1-3-1.5-4.8-.3-1.8-.6-4.1-.8-7.1s-.3-6.8-.5-11.5-.2-10.7-.3-18.1c-.3-3-.9-5.6-1.7-8.2-.9-2.4-2.1-4.4-3.5-5.9-1.5-1.5-3.2-2.4-5-2.7-2-.5-4.1 0-6.2 1.1-2.1 1.1-3.8 2.7-5.3 4.8-1.5 2.3-2.6 5-3.5 8-.9 3.2-1.5 6.5-2 10.3-.5 3.6-.6 7.4-.6 11.3s.3 7.7.8 11.5 1.1 7.4 2 10.7c.9 3.3 1.8 6.4 3 9.1 1.2 2.6 2.4 4.7 3.9 6.2 1.8 1.4 3.6 1.8 5.3 1.4 1.7-.5 3.2-1.5 4.5-2.9 1.4-1.5 2.4-3.2 3.3-5 .9-2 1.5-3.6 1.8-5.1.2.5.5 1.2.9 2.1.5.9.9 2 1.7 3 .6 1.1 1.4 2.1 2.1 3 .8.9 1.5 1.7 2.4 2.1.8.5 1.7.6 2.4.3.8-.3 1.5-1.1 2.3-2.6-1.4-2.7-2.4-5-3.3-6.7-.8-1.2-1.5-2.8-2.2-4.3zm-8.7-18c-.3 4.1-.9 8-1.5 11.8-.6 3.8-1.4 7.1-2.3 9.8-.9 2.7-2 4.7-3 5.9-1.1 1.2-2.3 1.4-3.5.6-1.1-1.8-2-4.2-2.9-7.3-.8-3-1.5-6.4-2-10-.5-3.6-.8-7.4-.9-11.3-.2-3.9-.2-7.9 0-11.5.2-3.6.6-7.1 1.2-10.3.6-3.2 1.4-5.9 2.3-7.9.8-1.5 1.7-2.7 2.9-3.8 1.2-1.1 2.6-1.4 4.2-.9 1.4.2 2.6 1.4 3.5 3.5s1.5 4.8 2 8.2c.5 3.3.6 7 .6 11s-.2 8.1-.6 12.2zm49.4 23c-.9-2.9-1.5-6.2-2-10-.3-3.8-.5-7.9-.5-12.1 0-4.4.2-8.8.3-13.3.2-4.5.2-8.9.3-13.5 0-4.5-.2-8.6-.5-12.7-1.2-1.7-2.4-2.4-3.6-2.1-1.2.3-2 1.4-2.4 3.2-.2 3-.2 6.4-.2 10v21.6c0 3.6 0 6.8-.2 10-.2 3-.3 5.7-.6 8.2-.3 2.4-.6 4.1-1.1 5.3-1.4 3.2-2.6 5.4-3.8 6.8-1.2 1.4-2.4 2.1-3.5 2.4-1.1.2-2.1-.2-2.9-.9-.9-.8-1.7-1.8-2.1-3.2-.6-1.4-1.1-2.7-1.2-4.4-.3-1.5-.3-3-.2-4.4l.5-51.9c0-.9-.5-1.7-1.1-2-.6-.5-1.2-.5-2-.5-.8.2-1.4.5-2 1.2-.6.6-1.1 1.5-1.2 2.6l.3 55.8c.3 4.1 1.1 7.1 2.3 9.4 1.2 2.1 2.6 3.6 4.1 4.5 1.5.9 3.2 1.1 5 .8s3.5-.9 5-2c1.5-.9 2.9-2.1 4.1-3.6 1.1-1.5 1.8-2.9 2.1-4.2.3.5.6 1.2.9 2.1.5.9.8 1.8 1.4 2.7.5.9 1.1 1.8 1.7 2.6.6.8 1.2 1.2 2 1.4.5.3.9.5 1.7.5.8 0 1.4-.2 2.1-.3.6-.2 1.2-.6 1.5-1.1.3-.5.3-1.1 0-1.8-1.9-2-3.3-4.3-4.2-7.1zM415 50.2c-.9-3.6-2-6.8-3.3-9.5-1.4-2.7-2.9-5-4.7-6.4-.9-.6-2-1.2-3.6-1.7-1.5-.6-3.2-.9-4.8-1.2-1.7-.2-3.3-.3-4.8 0-1.5.2-2.7.8-3.6 1.5l1.7 72.6c3.9 0 7.4-.9 10.3-2.6 2.9-1.7 5.4-4.1 7.4-7s3.6-6.2 4.7-10c1.2-3.8 2-7.7 2.4-11.8.5-4.1.5-8.2.2-12.4-.4-4.1-1-7.9-1.9-11.5zm-4.6 16.2c-.2 3.9-.6 7.9-1.4 11.8-.8 3.8-1.7 7.3-2.9 10.3s-2.6 5.4-4.1 7.3c-1.5 1.8-3.3 2.7-5 2.6 0-2.4-.2-5.3-.2-8.9s-.2-7.4-.2-11.5-.2-8.3-.3-12.4c-.2-4.2-.2-8.2-.3-11.8s-.3-7-.5-9.7c-.2-2.7-.3-4.7-.6-5.9 3-.8 5.4-.3 7.4 1.1 2 1.4 3.6 3.5 4.8 6.2 1.2 2.7 2.1 5.9 2.6 9.7.7 3.3.9 7.1.7 11.2zM36.5 32.2c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2.1-.1-3.9-1.8-3.9zm0 16.3c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-1.9-.1-3.9-1.8-3.9zm0 16.4c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2-.1-3.9-1.8-3.9zm0-49c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2.1-.1-3.9-1.8-3.9zm0 65.5c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2.1-.1-3.9-1.8-3.9zm0 16.3c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2.1-.1-3.9-1.8-3.9zM43.8 73c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.3-1.1-2.4-2.4-2.4zm0-32.8c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.3-1.1-2.4-2.4-2.4zm0 49.2c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1.1-2.4-2.4-2.4zm0-81.8c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1.1-2.4-2.4-2.4zm0 16.3c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1.1-2.4-2.4-2.4zm0 32.7c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.2-1.1-2.4-2.4-2.4zM28.3 7.7c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .7-2.1-.1-3.9-1.8-3.9zm-8.1 40.8c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-1.9-.2-3.9-1.8-3.9zM28.3 24c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .7-2-.1-3.9-1.8-3.9zm-8.1 40.9c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2-.2-3.9-1.8-3.9zm39.9 76.9c-22.5 0-41 1.8-41 4.1s18.3 4.1 41 4.1c22.5 0 41-1.8 41-4.1-.2-2.3-18.5-4.1-41-4.1zM12 40.4c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2-.1-3.9-1.8-3.9zm39.9 24.3c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.2-1-2.4-2.4-2.4zM12 24c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2-.1-3.9-1.8-3.9zm8.2 8.2c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2.1-.2-3.9-1.8-3.9zm8.1 24.5c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .7-1.9-.1-3.9-1.8-3.9zm0-16.3c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .7-2-.1-3.9-1.8-3.9zm0 32.6c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .7-1.9-.1-3.9-1.8-3.9zm0 16.5c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .7-2.1-.1-3.9-1.8-3.9zm-8.1-73.6c-1.7 0-2.9 1.8-2.9 3.9 0 4.4 2.7 8 4.4 8 0 0-2-1.2.3-8 .6-2.1-.2-3.9-1.8-3.9zm88.4 24.5c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .2-2.1-1.2-3.9-2.9-3.9zM92.3 56.7c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.1-1.2-3.9-2.9-3.9zm0-16.3c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.1-1.2-3.9-2.9-3.9zm0-16.4c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2-1.2-3.9-2.9-3.9zm0 49c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.1-1.2-3.9-2.9-3.9zm-8.2-40.8c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 0-2.1-1.2-3.9-2.9-3.9zm8.2-24.5c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.2-1.2-3.9-2.9-3.9zm-8.2 40.8c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 0-2-1.2-3.9-2.9-3.9zm8.2 41c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.2-1.2-3.9-2.9-3.9zm8.2-73.6c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.3-1.3-3.9-2.9-3.9zm8.1 8.1c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .2-2-1.2-3.9-2.9-3.9zM98.8 3.5C94.3 1.2 89.6 0 84.7 0 78 0 71.4 2.1 65.2 6.2c-1.8 1.2-3.5 2.4-5.1 3.6l-.3.3c-2.3-1.8-4.5-3.5-6.7-4.7-4.8-2.7-10.4-4.1-16.5-4.1-6.7 0-13.3 1.7-19.4 5-11.6 6-18 18.4-17.2 33 .9 15 5.1 30.8 13 48.5 5.6 12.6 12.1 23.6 19.2 32.5 2.1 2.7 4.5 5.4 7.4 7.6 1.4 1.1 3.2 1.7 5 1.7 1.7 0 3.2-.5 4.4-1.4 2.1-1.7 2-6 2-9.1v-2.3c.6-9.8 2.3-17.8 5.3-24.8 1.7-3.8 3.6-7.4 5.1-10.3 2.3 4.2 3.9 7.7 5.3 11 3.2 7.9 4.1 16.6 4.4 24.8v.8c.2 4.5.5 8.6 4.5 11.8.6.5 1.2.6 1.8.6 1.7 0 3.3-1.5 4.5-2.6l.2-.2c3.5-3.2 6.4-7 8.9-10.7 7.9-11 14.7-24.2 20.1-38.7 2.7-7.4 5-15 6.5-22.7 1.5-7.1 2.9-15.4 1.8-23.6-1.1-11.6-9.4-23.1-20.6-28.7zm13.8 48.1c-.5 2.3-.9 4.5-1.5 6.8-.6-.9-1.4-1.5-2.3-1.5-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 .3 0 .5-.2.8-.3-1.5 4.7-3.3 9.4-5.4 14.1-.6-.8-1.2-1.2-2.1-1.2-1.7 0-2.4 2-1.8 3.9.5 1.5.8 2.7.9 3.6-1.2 2.9-2.7 5.7-4.2 8.5-3.6 6.5-7 11.9-10.6 16.6-.2 0-.5-.2-.6-.2-1.4 0-2.3 1.5-2 3.3-.6.8-1.4 1.5-2 2.3-.8.9-1.7 1.8-2.7 2.7-.3-.2-.8-.3-1.1-.3v1.2c-.2-2-.2-3.9-.3-5.7.2.3.2.5.2.5s2.4-6.2 2.4-9.8c0-1.4-1.1-2.4-2.4-2.4-.6 0-1.2.3-1.7.6v-.2c-1.2-5.7-3.3-11-5.4-15.7.6-2.1 1.4-4.8 1.4-6.8 0-1.4-1.1-2.4-2.4-2.4-1.4 0-2.4 1.1-2.4 2.4-.9-1.7-1.8-3.3-2.7-4.8.6-1.1 1.2-2.1 1.8-3.3.6-1.1 1.2-2 1.7-3C67.2 74.8 68 77 68 77s2.4-6.2 2.4-9.8c0-.6-.2-1.1-.5-1.5 1.5-3.2 2.6-6.4 2.6-9.8 0-.2 0-.5-.2-.6s-.6-.5-1.7-.5h-.9c.3-1.5.6-2.9.6-4.1 0-1.4-1.1-2.4-2.4-2.4-1.4 0-2.4 1.1-2.4 2.4 0 1.5.3 3.3.9 5-.6.3-1.1.8-1.1 1.4-.2 5.4-2.9 10.4-5.6 15.1l-.5.8c-1.1.3-1.8 1.2-1.8 2.4v.8c.2-.2.2-.3.3-.5-1.2 2.3-2.6 4.5-3.8 6.8-.5-.8-1.2-1.4-2.3-1.4-1.4 0-2.4 1.1-2.4 2.4 0 1.7.6 3.9 1.1 5.9-1.1 2.4-2.1 4.8-3 7.3-1.1 3-1.8 6.2-2.4 9.2-.5-.3-.9-.5-1.4-.5-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8 0 .9-.2 1.7-.2 2.6v1.7c-.3 0-.6.2-.9.3-1.5-1.5-2.9-3.3-4.1-5 .3-1.8-.5-3.3-2-3.3h-.5c.3.5.8.9 1.1 1.5-3-4.1-5.9-8.6-9.1-14.2-2.4-4.4-4.7-8.8-6.8-13.2.2-.9.5-1.8.8-2.9.6-2.1-.2-3.9-1.8-3.9-.6 0-1.2.3-1.7.8-2.3-5.3-4.1-10.7-5.7-16.2 0-1.2.3-2.9 1.1-5.3.6-2.1-.2-3.9-1.8-3.9-.6 0-1.2.3-1.7.6.3 1.4.8 2.7 1.1 4.1-.5-1.5-.8-3-1.2-4.5-2.9-12.2-5-25.1 0-36.1.3-.9.8-1.7 1.2-2.4.8 1.1 1.5 1.5 2 1.5 0 0-.9-.6-.8-3.3 2.1-3.2 5-5.9 8.2-7.9-.6.3-1.2.8-1.7 1.2.8 1.2 1.8 1.8 2.4 1.8 0 0-.9-.6-.8-3 3.9-2.6 8.3-3.9 12.7-3.9h.3-.2c.5 3.9 2.9 7 4.4 7 0 0-1.7-1.1-.2-6.5 5.1.9 9.7 3.6 14.1 6.7 1.5 1.1 2.9 2.1 4.2 3.2.9.8 1.8 1.4 2.9 2.1.6 1.8 1.1 3 1.1 3s.3-.8.6-1.8c1.8 1.2 3.6 2.1 5.3 2.9.6 3.3 2.1 7.1 2.1 7.1s1.1-2.7 1.8-5.7c2.1.6 4.2.9 6.5.9 2.6 0 5.3-.5 8-1.2-.5.2-1.1.3-1.5.3 1.1 4.7-.3 5.6-.3 5.6 1.5 0 4.1-3.2 4.4-7.3v-.2-.3-.2c0-2.3-1.4-3.9-2.9-3.9s-2.4 1.8-1.8 3.8c-1.1.3-2.3.5-3.3.5-2.9 0-5.7-.9-8.3-2.4-.2-1.2-1.2-2.1-2.4-2.1-.3 0-.6 0-.9.2-.5-.3-1.1-.6-1.5-1.1 1.1-.8 2.3-1.7 3.5-2.4 1.5-1.1 3.2-2 4.7-2.9v.5c0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-.9-.5-1.7-1.2-2.1 1.8-.8 3.6-1.2 5.4-1.5.9 4.4-.5 5.1-.5 5.1 1.4 0 3.3-2.3 4.1-5.6 4.4-.2 8.9.8 13 2.4.2 2.6-.8 3-.8 3 .8 0 1.8-.8 2.7-2.1 1.1.5 2 1.1 2.9 1.7 1.4.9 2.6 2 3.6 3l-.8-.8c1.5 5.4-.2 6.5-.2 6.5.9 0 2.1-1.2 3.2-2.9 6.2 8.5 4.9 22 2.5 34.4zm-12.1-3.1c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2-1.3-3.9-2.9-3.9zm0 16.4c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.1-1.3-3.9-2.9-3.9zm0-32.7c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 .1-2.1-1.3-3.9-2.9-3.9zm-24.1-8.3C75 23.9 74 25 74 26.3c0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1-2.4-2.4-2.4zm-16.3 0c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1-2.4-2.4-2.4zm16.3 65.5c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1-2.4-2.4-2.4zM60.1 40.2c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.3-1-2.4-2.4-2.4zm24 24.7c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 0-2.1-1.2-3.9-2.9-3.9zM51.9 32.1c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1-2.4-2.4-2.4zm0-16.4c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.3-1-2.4-2.4-2.4zm8.2 40.9c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.2-1-2.4-2.4-2.4zm8.2-24.5c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1.1-2.4-2.4-2.4zm15.8 65.6c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 0-2.1-1.2-3.9-2.9-3.9zM51.9 48.4c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.4-1-2.4-2.4-2.4zm32.2 33c-1.7 0-2.4 2-1.8 3.9 2.1 6.8.3 8 .3 8 1.7 0 4.4-3.6 4.4-8 0-2.3-1.2-3.9-2.9-3.9zM76.4 73C75 73 74 74.1 74 75.4c0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.3-1-2.4-2.4-2.4zm0-32.8c-1.4 0-2.4 1.1-2.4 2.4 0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.3-1-2.4-2.4-2.4zm0 16.4C75 56.6 74 57.7 74 59c0 3.6 2.4 9.8 2.4 9.8s2.4-6.2 2.4-9.8c0-1.2-1-2.4-2.4-2.4z" fill="#49c0b6"/></svg>
			</a>

			<div class="header-content">
				<ul class="links-list">						
					<?php foreach (wp_get_nav_menu_items( 'Header') as $key => $obj):
						global $post;
						$thePostID = $post->ID; ?>
						<li>
							<a href="<?php echo $obj->url; ?>" title="<?php echo $obj->title; ?>" class="link<?php if($thePostID == $obj->object_id) : ?> current<?php endif;?>">
								<?php echo $obj->title; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			
			<div class="navbar-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
			

		</header><!-- /#header -->

		<div id="content">