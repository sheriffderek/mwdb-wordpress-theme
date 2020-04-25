<?php

$projectTitlesArgs = array(
  'post_type' => 'project',
  'showposts' => '-1',
  'order'     => 'DESC',
  'post__not_in' => array($post->ID)
);

// The Query
$projectTitlesQuery = new WP_Query( $projectTitlesArgs );

if ( $projectTitlesQuery->have_posts() ) { 
// =====================================?>

  <ul class='project-list'>

    <?php while ( $projectTitlesQuery->have_posts() ) { 

      $projectTitlesQuery->the_post(); ?>

      <li class='project'>
        <a href='<?php the_permalink(); ?>'>
          <h3><?php the_field('project_title'); ?></h3>
        </a>
      </li>
    
    <?php } ?>

  </ul>

  <?php wp_reset_postdata(); 

} else { ?>

  <h2>There are currently no projects.</h2>

<?php  } ?>