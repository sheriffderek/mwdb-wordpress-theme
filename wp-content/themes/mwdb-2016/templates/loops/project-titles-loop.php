<?php
// =========================================
// Define the rules/arguments
$purveyor_args = array(
  'post_type'     => 'project',
  'showposts'     => '-1'
);

// The Query
$purveyor_query = new WP_Query($purveyor_args);

// The Loop
if ( $purveyor_query->have_posts() ) { ?>
<?php //======================================== ?>


  <ul class='project-list'>

    <?php while ( $purveyor_query->have_posts() ) {
      $purveyor_query->the_post();  global $post; // for slug
      // ================================== 
      ?>



        <li>
          <a href='<?php the_permalink(); ?>'>
            <h3>Project name</h3>
          </a>
        </li>



      <?php 
      // ==================================
    } ?>

  </ul>


<?php //======================================== ?>
<?php } else { ?>

  <?php // what happens if there are no posts? ?>

<? }

// restore original post data
wp_reset_postdata();
// =========================================
?>