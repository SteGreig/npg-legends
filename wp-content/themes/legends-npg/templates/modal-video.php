<div class="modal-video">

	<?php if( $videoProvider === 'youtube' ): ?>
    <div class="video-container">
      <iframe class="lazyload" width="1200" height="675"  data-src="https://www.youtube.com/embed/<?php echo $videoId; ?>?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  <?php elseif( $videoProvider === 'momento' ): ?>
    <div class="video-container">
      <iframe  width="1200" height="675" src="<?php echo $videoLink; ?>" frameborder="0"></iframe>
    </div>
  <?php elseif( $videoProvider === 'vimeo' ): ?>
    <div class="video-container">
      <iframe class="lazyload" width="1200" height="675" data-src="https://player.vimeo.com/video/<?php echo $videoId; ?>?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
    <!-- <script src="https://player.vimeo.com/api/player.js"></script> -->
  <?php endif; ?>

  <img class="modal-video__close" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-close.svg" alt="Close icon">

</div>
