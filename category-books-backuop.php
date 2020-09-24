<?php get_header();?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="xiong-main-content">
          <ul class="xiong-filters">
            <?php
                $args= array(
                  'include'          =>   23,
                  'title_li'          => __('')
                );
              wp_list_categories( $args );
            ?>
            <?php
                $args= array(
                  'child_of'          =>   23,
                  'title_li'          => __(''),
                  'depth'             => 1
                );
              wp_list_categories( $args );
            ?>
          </ul>
        <div id="main-content">
          <div id="inside">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'templates/articlebox'); ?>


        <?php endwhile;?>

        <?php endif; ?>
        <div class="xiong-pagination">
         <center>
           <?php get_template_part( 'templates/pagination'); ?>
         </center>

       </div><!--sivutus -->
        </div><!-- inside-->
        </div><!-- main-content-->

      </div><!--main-content -->

      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-front-sidebar">
        <h3 class="rounded">Top books right now</h3>
          <ol class="topbooks">
            <?php
            global $post;
            $args = array( 'tag'=> 'topbooks', 'orderby' => 'meta_value_num', 'meta_key' => 'top_books_order', 'order' => 'ASC', 'posts_per_page' => 5 );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) :
              setup_postdata( $post ); ?>
              <li>
                <a href="<?php the_permalink();?>">
                   <h4><?php the_title( );?> </h4><em>by <?php the_field('author');?></em>
                   <?php the_post_thumbnail( );?>
                </a>
              </li>
            <?php endforeach;
            wp_reset_postdata(); ?>
          </ol>
        </aside>
      </div><!--/col4-->
    </div><!--/row -->



  </div><!--/container -->
</section>



<?php get_footer();?>
