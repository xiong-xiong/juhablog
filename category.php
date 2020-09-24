<?php get_header();?>


<section>
  <div class="container">
  <div id="main-content">
          <div id="inside" class="grid-x grid-margin-x grid-margin-y">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'templates/bookbox'); ?>


        <?php endwhile;?>

        <?php endif; ?>

        </div><!-- inside-->
        </div><!-- main-content-->
        <div class="xiong-pagination row">
         <center>
           <?php get_template_part( 'templates/pagination'); ?>
         </center>

       </div><!--sivutus -->
   


  </div><!--/container -->
</section>



<?php get_footer();?>
      
     