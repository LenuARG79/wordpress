<?php if ( have_posts() ) : ?>
    <div class="productos">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="producto">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium');
                } ?>
                <h3><?php the_title(); ?></h3>
                <p class="precio"><?php echo wc_price( get_post_meta( get_the_ID(), '_regular_price', true ) ); ?></p>
                <a href="<?php the_permalink(); ?>" class="comprar">Ver Producto</a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
