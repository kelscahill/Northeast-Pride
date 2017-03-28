<?php get_header(); ?>
<div class="gdlr-content">
	<section id="content-section-1">
		<div class="section-container container">
			<div class="slides coaches">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php
				$args = array( 'post_type' => 'coach', 'orderby' => 'date');
				$loop = new WP_Query( $args ); ?>
				<?php if ($loop->have_posts() ) while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="gdlr-classic-player three columns">
					<div class="gdlr-item gdlr-content-item">
						<div class="gdlr-soccer-player-thumbnail">
							<a href="<?php the_permalink() ?>">
								<?php
								$coach_image = get_field('coach_image');
								if($coach_image): ?>
								<img src="<?php echo $coach_image['url']; ?>" alt="<?php echo $coach_image['alt']; ?>" width="400" height="400" draggable="false" />
								<?php endif; ?>
							</a>
						</div>
						<div class="gdlr-classic-player-item-content">
							<div class="gdlr-soccer-player-title-wrapper">
								<h3 class="gdlr-soccer-player-title gdlr-skin-title"><a href="http://demo.goodlayers.com/realsoccer/player/roboto-carlos/"><?php the_field("coach_name"); ?></a></h3>
								<div class="gdlr-soccer-player-position gdlr-skin-info"><?php the_field("coach_title"); ?></div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile;	?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</section>
</div><!-- gdlr-content -->
<?php get_footer(); ?>