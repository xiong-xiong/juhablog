<?php get_header();?>



<section>
  <div class="container">
          <ul class="xiong-filters">
            <?php
                $args= array(
                  'include'          =>   22,
                  'title_li'          => __('')
                );
              wp_list_categories( $args );
            ?>
            <?php
                $args= array(
                  'child_of'          =>   22,
                  'title_li'          => __(''),
                  'depth'             => 1
                );
              wp_list_categories( $args );
            ?>
          </ul>
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
