 <article>
    <a class="xiong-articlebox" href="<?php the_permalink();?>">
        <header>
            <h3><?php the_title( );?></h3>
            <strong><?php the_field('author');?></strong>
            <p><em><?php echo get_the_date('j.n.Y'); ?> </em></p>
            <p><?php the_excerpt();?></p>
            <?php get_template_part( 'templates/meta'); ?>
        </header>

    </a>
</article>