<?php get_header();?>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="xiong-main-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						<article>

							<p><?php the_content( );?></p>
						</article>

				<?php endwhile; endif; ?>
			</div><!--xiong-main-content -->
		
			</div><!--/col8 -->
			<div class="col-md-4">
				<aside class="xiong-front-sidebar">
					<?php
						global $post;
						$args = array( 'post_type'=> array('post', 'calculators') );
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : 
						  setup_postdata( $post ); ?>
						 
							<article>
							<a class="xiong-articlebox" href="<?php the_permalink();?>">
								<header>
									<h3><?php the_title( );?></h3>
								</header>

							</a>
						</article>


						<?php endforeach;
						wp_reset_postdata(); ?>

				</aside>
			</div><!--/col4-->
		</div><!--/row -->
		
	</div><!--/container -->
</section>



<?php get_footer();?>