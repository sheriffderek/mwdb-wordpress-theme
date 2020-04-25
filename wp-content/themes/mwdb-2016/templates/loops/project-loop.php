<?php

$projectArgs = array(
  'post_type'    => 'project',
  'showposts'    => '-1',
  'order'        => 'DESC',
  'post__not_in' => array($post->ID)
);

// The Query
$projectQuery = new WP_Query( $projectArgs );

if ( $projectQuery->have_posts() ) { 
// =====================================?>

  <ul class='project-list'>

    <?php while ( $projectQuery->have_posts() ) { 

      $projectQuery->the_post(); ?>

      <li class='project'>
        <a href='<?php the_permalink(); ?>' class='link'>
          <figure class='image-w'>
            <?php the_post_thumbnail('landscape'); ?>
          </figure>
          <span class='text-w'>
            <h2 class='title'><?php the_field('project_title'); ?></h2>
          </span>
        </a>
      </li>
    
    <?php } ?>

  </ul>

  <?php wp_reset_postdata(); 

} else { ?>

  <h2>There are currently no projects.</h2>

<?php  } ?>