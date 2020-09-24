<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section>

            <article style="width: 100%; background: #fff;">
                  <header style="text-align: center;">
                    <h2 style="padding-top: 20px;"><?php the_title( );?></h2>
                  </header>
                  <content>
                    <?php the_content( );?>
                   
                  </content>
                </div>
            </article>
        
</section>

<?php endwhile; endif; ?>
<style>
#calculator {
  min-width: 100%;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.2.11/iframeResizer.min.js" integrity="sha512-HY1lApSG7xxx8mYzs/lxRs+c5AaDThRaa3pvQB6puiswvf2lWqMJVf+8qSGiL4ZXfHQoPIqbd1TlpqfycPo3cQ==" crossorigin="anonymous"></script>
<?php get_footer();?>