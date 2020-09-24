<?php get_header();?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="xiong-main-content">
        <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
            <?php get_template_part( 'templates/calcteaser'); ?>

        <?php endwhile; endif; ?>
      </div><!--main-content -->
    
      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-front-sidebar">
          <h1>Calculators</h1>
          <p>This is a new section for my blog where I offer various useful web based calculators, mostly built with Vue.js</p>
        </aside>
      </div><!--/col4-->
    </div><!--/row -->

  </div><!--/container -->
</section>



<?php get_footer();?>