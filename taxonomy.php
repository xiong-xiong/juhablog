<?php get_header();?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="xiong-main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <center><h2> <?php single_term_title(); ?> </h2></center>
            <?php get_template_part( 'templates/articlebox'); ?>


        <?php endwhile; endif; ?>
         <div class="xiong-pagination">
          <center>

            <?php get_template_part( 'templates/pagination'); ?>
          </center>
        </div><!--xiong-pagination -->
      </div><!--xiong-main-content -->
    
   
   
  </div><!--/container -->
</section>



<?php get_footer();?>