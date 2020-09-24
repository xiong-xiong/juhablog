<?php get_header();?>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="xiong-main-content">
        <?php
						global $post;
						$args = array( 'post_type'=> array('post', 'calculators') );
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : 
						  setup_postdata( $post ); ?>
					
						<?php get_template_part( 'templates/articlebox'); ?>

            <?php endforeach;
						wp_reset_postdata(); ?>

				<div class="xiong-pagination">
					<div style="text-align: center;">
						<?php get_template_part( 'templates/pagination'); ?>
					</div>
				</div><!--xiong-pagination -->

			</div><!--main-content -->
		
			</div><!--/col8 -->
			<div class="col-md-4">
				<aside class="xiong-front-sidebar">
					<?php dynamic_sidebar('front_sidebar' ); ?>
				</aside>
			</div><!--/col4-->
		</div><!--/row -->
		

		

	</div><!--/container -->
</section>



<?php get_footer();?>
      
     