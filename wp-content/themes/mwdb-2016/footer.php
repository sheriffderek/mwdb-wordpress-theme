
<?php

  $imagePath = get_template_directory_uri() . "/images";

?>



<footer class='container footer'>
<div class='inner-w'>
  
  <nav class='main-menu'>
    <?php include('partials/menu.php'); ?>
  </nav>

  <a href='<?php site_url(); ?>/landing' class='image-w logo'>
    <img src='<?php echo $imagePath; ?>/logo.png' alt=''>
  </a>

</div>
</footer>








	<!-- △△△△△△△△△△△△△△△△△△△△△△△△△△△ -->
	<!-- <div class='media-size-helper'></div>  -->
  <!-- optional -->

	<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.pkgd.js'></script> -->

	<?php // pull in scripts among other things ?>
	<?php wp_footer(); ?> 


</body></html>