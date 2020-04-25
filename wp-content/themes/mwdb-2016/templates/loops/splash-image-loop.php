<?php

$splashArgs = array(
  'post_type' => 'splashimages',
  'showposts' => '-1',
  'order'     => 'DESC'
);

// The Query
$splashQuery = new WP_Query( $splashArgs );

if ( $splashQuery->have_posts() ) { 
// =====================================?>

  <ul class='carousel fade-flickity' rel='splash-slider'>

    <?php while ( $splashQuery->have_posts() ) { 

      $splashQuery->the_post(); ?>



      <?php
        
        $portrait  = get_field('portrait_crop');
        
        $pSmall    = $portrait['sizes'][ 'thumbnail' ];
        $pMedium   = $portrait['sizes'][ 'medium' ];
        $pLarge    = $portrait['sizes'][ 'large' ];
        $px        = get_field('portrait_x_position');
        $py        = get_field('portrait_y_position');
        
        $landscape = get_field('landscape_crop');

        $lSmall    = $landscape['sizes'][ 'thumbnail' ];
        $lMedium   = $landscape['sizes'][ 'medium' ];
        $lLarge    = $landscape['sizes'][ 'large' ];
        $lx        = get_field('landscape_x_position');
        $ly        = get_field('landscape_y_position');
      ?>



      <li class='cell' rel="splash-cell"
        data-p-small='<?php echo $pSmall; ?>'
        data-p-medium='<?php echo $pMedium; ?>'
        data-p-large='<?php echo $pLarge; ?>'
        data-px='<?php echo $px; ?>'
        data-py='<?php echo $py; ?>'

        data-l-small='<?php echo $lSmall; ?>'
        data-l-medium='<?php echo $lMedium; ?>'
        data-l-large='<?php echo $lLarge; ?>'
        data-lx='<?php echo $lx; ?>'
        data-ly='<?php echo $ly; ?>'
      >
      </li>



    
    <?php } ?>

  </ul>

  <?php wp_reset_postdata(); 

} else { ?>

  <h2>There are currently no projects.</h2>

<?php  } ?>