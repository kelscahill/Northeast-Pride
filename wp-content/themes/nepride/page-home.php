<?php get_header(); ?>



	<div class="gdlr-content">



		<!-- Above Sidebar Section-->

		<?php global $gdlr_post_option, $above_sidebar_content, $with_sidebar_content, $below_sidebar_content; ?>

		<?php if(!empty($above_sidebar_content)){ ?>

			<div class="above-sidebar-wrapper"><?php gdlr_print_page_builder($above_sidebar_content); ?></div>

		<?php } ?>

		

		<!-- Sidebar With Content Section-->

		<?php 

			if( !empty($gdlr_post_option['sidebar']) && ($gdlr_post_option['sidebar'] != 'no-sidebar' )){

				global $gdlr_sidebar;

				

				$gdlr_sidebar = array(

					'type'=>$gdlr_post_option['sidebar'],

					'left-sidebar'=>$gdlr_post_option['left-sidebar'], 

					'right-sidebar'=>$gdlr_post_option['right-sidebar']

				); 

				$gdlr_sidebar = gdlr_get_sidebar_class($gdlr_sidebar);

		?>

			<div class="with-sidebar-wrapper">

				<div class="with-sidebar-container container">

					<div class="with-sidebar-left <?php echo $gdlr_sidebar['outer']; ?> columns">

						<div class="with-sidebar-content <?php echo $gdlr_sidebar['center']; ?> columns">

							<?php 

								if( !empty($with_sidebar_content) ){

									gdlr_print_page_builder($with_sidebar_content, false);

								}

								if( !empty($gdlr_post_option['show-content']) && $gdlr_post_option['show-content'] != 'disable' ){

									get_template_part('single/content', 'page');

								}

							?>							

						</div>

						<?php get_sidebar('left'); ?>

						<div class="clear"></div>

					</div>

					<?php get_sidebar('right'); ?>

					<div class="clear"></div>

				</div>				

			</div>				

		<?php 

			}else{ 

				if( !empty($with_sidebar_content) ){ 

					echo '<div class="with-sidebar-wrapper">';

					gdlr_print_page_builder($with_sidebar_content);

					echo '</div>';

				}

				if( empty($gdlr_post_option['show-content']) || $gdlr_post_option['show-content'] != 'disable' ){

					get_template_part('single/content', 'page');

				}

			} 

		?>



		

		<!-- Below Sidebar Section-->

		<?php if(!empty($below_sidebar_content)){ ?>

		<div class="below-sidebar-wrapper">

			<?php gdlr_print_page_builder($below_sidebar_content); ?>

		<?php } else { ?>

		<div class="gdlr-color-wrapper gdlr-show-all no-skin" style="background-color:#003a63;">

			<div class="section-container container">

				<div class="player-item-wrapper" data-ajax="http://demo.goodlayers.com/realsoccer/wp-admin/admin-ajax.php">

					<div class="gdlr-item-title-wrapper gdlr-item pos-left gdlr-nav-container ">

						<div class="gdlr-item-title-head">

							<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Coaches</h3>

							<a class="gdlr-item-title-link" href="http://cahillscreative.com/staging/nepride/coaches">View All Coaches</a>

							<div class="gdlr-title-navigation"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>

							<div class="clear"></div>

						</div>

					</div>

					<div class="player-item-holder">

						<div class="gdlr-item gdlr-classic-player-carousel-wrapper">

							<div class="flexslider" data-type="carousel" data-nav-container="player-item-holder" data-columns="4">

								<div class="flex-viewport" style="overflow: hidden; position: relative;">

									<ul class="slides">

										<?php while ( have_posts() ) : the_post(); ?>

										<?php

										$args = array( 'post_type' => 'coach', 'orderby' => 'date');

										$loop = new WP_Query( $args ); ?>

										<?php if ($loop->have_posts() ) while ( $loop->have_posts() ) : $loop->the_post(); ?>

										<li class="gdlr-item gdlr-classic-player">

											<div class="gdlr-soccer-player-thumbnail">

												<a href="<?php the_permalink(); ?>">

													<?php

													$coach_image = get_field('coach_image');

													if($coach_image): ?>

													<img src="<?php echo $coach_image['url']; ?>" alt="<?php echo $coach_image['alt']; ?>" width="400" height="400" draggable="false" />

													<?php endif; ?>

												</a>

											</div>

											<div class="gdlr-classic-player-item-content">

												<div class="gdlr-soccer-player-title-wrapper">

													<h3 class="gdlr-soccer-player-title gdlr-skin-title"><a href="http://demo.goodlayers.com/realsoccer/player/roboto-carlos/" style="color:white;"><?php the_field("coach_name"); ?></a></h3>

													<div class="gdlr-soccer-player-position gdlr-skin-info"><?php the_field("coach_title"); ?></div>

												</div>

											</div>

										</li>

										<?php endwhile;	?>

										<?php endwhile; // end of the loop. ?>

									</ul>

								</div>

							</div>

						</div>

						<div class="clear"></div>

					</div>

				</div>

			</div>

		</div>

		<?php } ?>



	</div><!-- gdlr-content -->

<?php get_footer(); ?>