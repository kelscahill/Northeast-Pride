<?php get_header(); ?>

	<div class="gdlr-content">



	<section id="content-section-1">



		<div class="section-container container">
			<div class="fixture-result-item-wrapper" style="margin-bottom: 80px;" data-ajax="http://demo.goodlayers.com/realsoccer/wp-admin/admin-ajax.php">

				<div class="gdlr-item gdlr-accordion-item style-1">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					$args = array( 'post_type' => 'tournament', 'orderby' => 'date', 'meta_key' => '10u');
					$loop = new WP_Query( $args ); ?>
					
						
					<?php if ($loop->have_posts() ) while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="accordion-tab">
							<h4 class="accordion-title"><i class="icon-minus"></i><span>10U</span></h4>
							<div class="accordion-content">					
								<div class="tournament-date">
									<?php 
										$date = DateTime::createFromFormat('Ymd', get_field('tournament_date'));
										echo $date->format('d/m'); 
									?>
								</div>
								<div class="tournament-name">
									<?php the_field("tournament_name"); ?>
								</div>
								<div class="tournament-location">
									<?php the_field("tournament_location"); ?>
								</div>
								
						    </div>
						</div>
					<?php endwhile;	?>
						
				<?php endwhile; // end of the loop. ?>



					<!-- <div class="accordion-tab active pre-active">
						<h4 class="accordion-title"><i class="icon-minus"></i><span>9U</span></h4>
						<div class="accordion-content">
							<div class="gdlr-date">
								06/15
							</div>
							<div class="gdlr-name">
								Tornament
							</div>
							<div class="gdlr-location">
								Location
							</div>
						</div>
					</div>

					<div class="accordion-tab">
						<h4 class="accordion-title"><i class="icon-plus"></i><span>10U</span></h4>
						<div class="accordion-content">
							<div class="gdlr-date">
								06/15
							</div>
							<div class="gdlr-name">
								Tornament
							</div>
							<div class="gdlr-location">
								Location
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
		
	</div><!-- gdlr-content -->
<?php get_footer(); ?>
