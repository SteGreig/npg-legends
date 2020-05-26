<!DOCTYPE html>
<html lang="en" class="no-js" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://use.typekit.net/jzq7bre.css">

	<script type="text/javascript">
    var MTUserId='6afe7765-bfd5-4bd4-880c-f64a96ae86d5';
    var MTFontIds = new Array();

    MTFontIds.push("5742382"); // Perpetua® W05 Titling Light 
    (function() {
        var mtTracking = document.createElement('script');
        mtTracking.type='text/javascript';
        mtTracking.async='true';
        mtTracking.src='mtiFontTrackingCode.js';

        (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(mtTracking);
    })();
	</script>

	<style type="text/css">
		@font-face{
				font-family:"Perpetua";
				src:url("<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/5742382/7182d2b0-9130-476c-a723-5118b396d901.woff2") format("woff2"),url("<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/5742382/64cc7f58-9007-4478-82db-38f3af965d61.woff") format("woff");
		}

	</style> 

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
