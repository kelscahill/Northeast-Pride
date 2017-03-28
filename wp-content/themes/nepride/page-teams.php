<?php get_header(); ?>

<div class="gdlr-content">

	<section id="content-section-1">

		<div class="section-container container">

			<div class="fixture-result-item-wrapper" style="margin-bottom: 80px;" data-ajax="http://demo.goodlayers.com/realsoccer/wp-admin/admin-ajax.php">

				<div class="gdlr-item gdlr-accordion-item style-1">

					<div class="accordion-tab active">

						<h4 class="accordion-title"><i class="icon-minus"></i><span>9U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC','meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '9u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<th>Name</th>

									<th>Graduation Year</th>

									<th>School</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>10U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '10u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>11U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '11u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>12U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '12u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>13U NY</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '13uNy'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>13U PA</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '13uPa'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>13U Select</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '13uSelect'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>14U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '14u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>15U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '15u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>16U Showcase</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '16uShowcase'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>16/17U Showcase</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '1617uShowcase'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>17U Select</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '17uSelect'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>17U Showcase</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '17uShowcase'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>18U Select</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'team', 'meta_key' => 'player_number', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'player_team',

								'value' => '18uSelect'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Number</th>

									<tH>name</th>

									<th>GradUation year</th>

									<Th>school</th>

									<th>Position</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<Tr>

									<td data-th="Number">

										<?php the_field("player_number"); ?>

									</td>

									<td data-th="Name">

										<?php the_field("player_name"); ?>

									</td>

									<td data-th="Graduation Year">

										<?php the_field("player_graduation_year"); ?>

									</td>

									<td data-th="School">

										<?php the_field("player_school"); ?>

									</td>

									<td data-th="Position">

										<?php the_field("player_position"); ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	</div><!-- gdlr-content -->

	<?php get_footer(); ?>

