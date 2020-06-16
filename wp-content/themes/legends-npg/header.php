<!DOCTYPE html>
<html lang="en" class="no-js" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T9QX6Z9');</script>
	<!-- End Google Tag Manager -->

	<link rel="stylesheet" href="https://use.typekit.net/jzq7bre.css">

	<?php wp_head(); ?>
	
</head>

<body>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9QX6Z9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<a class="srt" href="#aria-main">Skip to main content</a>

<?php
	if( !is_page(  array( 'privacy', 'privacy-policy', 'cookie-privacy' ) ) ) :
		//get_template_part( 'templates/global-gdpr' );
	endif;
	get_template_part( 'templates/global-header' );
?>

<main class="global-main <?php if(is_front_page()) { echo "sp"; } ?>" id="aria-main">
