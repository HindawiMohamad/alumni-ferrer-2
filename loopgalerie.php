<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="col-12 col-md-6 col-xl-3 article <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>
"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="galerie">
					<a href="<?php echo get_permalink(); ?>">
					<div class="col-12">
						<h4 class="text-center"></h4>
						<div class="col-10">
						<div class="mx-auto">
						<?php the_post_thumbnail( $size = '', $attr = '' );?>
						</div>
						</div>
						<div class="box mx-auto"></div>
					</div>
						
					<div class="col-12 max">
						<h3><?php the_title(); ?></h3>
							
					<p class="text-center"><?php the_time('d/m/Y') ?></p>
					</div>	
					</a>
				</div>
		
	</article></div>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>