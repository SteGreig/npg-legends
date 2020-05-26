
<article class="section section--hero section--<?php echo $section; ?> theme--red-to-deep-red" id="hero">
	
  <section class="section--hero__container container flex flex-col space-between items-center">

    <h1 class="section--hero__logo">
      <img class="section--hero__logo-img" src="<?php echo get_sub_field('hs_logo')['url'];?>" alt="Legends of Birtish Industry">
      <span class="srt">Legends of British Industry</span>
      <span class="section--hero__logo-txt">Photography by Zoë Law</span>
    </h1>

    <div class="section--hero__mid">
      <div class="section--hero__image-wrap modal-video-trigger">
          <img class="section--hero__image" src="<?php echo get_sub_field('hs_video_image')['url'];?>" alt="Legends Exhibition">
          <img class="section--hero__play-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-play.svg" alt="Play icon">
      </div>
    </div>

    <div class="section--hero__copy">
      <?php the_sub_field('hs_copy'); ?>
      <p class="in-support flex items-center">In support of <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/maggies-logo.svg" alt="Maggies logo"></p>
    </div>

    <?php if(have_rows('hs_ctas')): ?>
    <div class="section--hero__ctas">
      <?php while(have_rows('hs_ctas')): the_row(); ?>
        <a class="cta cta--white" <?php if(get_sub_field('hs_cta')['target']): ?>target="_blank"<?php endif; ?> href="<?php echo get_sub_field('hs_cta')['url']; ?>"><?php echo get_sub_field('hs_cta')['title']; ?></a>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
		
  </section>

  <?php
  $videoProvider = get_sub_field('hs_video_provider');
  $videoId = get_sub_field('hs_video_id');
  include('modal-video.php'); ?>
	
</article>
