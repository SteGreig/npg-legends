<!DOCTYPE html>
<html lang="en" class="no-js" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://use.typekit.net/jzq7bre.css">

	<?php wp_head(); ?>
	
</head>

<body>
<?php wp_body_open(); ?>
<a class="srt" href="#aria-main">Skip to main content</a>

<?php
	if( !is_page(  array( 'privacy', 'privacy-policy', 'cookie-privacy' ) ) ) :
		//get_template_part( 'templates/global-gdpr' );
	endif;
	get_template_part( 'templates/global-header' );
?>

<main class="global-main <?php if(is_front_page()) { echo "sp"; } ?>" id="aria-main">
