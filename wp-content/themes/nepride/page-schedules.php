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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '9u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '10u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '11u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '12u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>13U</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '13u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '14u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '15u'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '16uShowcase'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

								<?php endif; wp_reset_query(); ?>

								<?php endwhile; // end of the loop. ?>

							</table>

						</div>

					</div>

					<div class="accordion-tab">

						<h4 class="accordion-title"><i class="icon-plus"></i><span>16U Nike Select</span></h4>

						<div class="accordion-content">

							<table class="schedules">

								<?php while ( have_posts() ) : the_post(); ?>

								<?php

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '16uNikeSelect'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '17uShowcase'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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

								$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'meta_query' => array(

								array(

								'key' => 'tournament_team',

								'value' => '18uSelect'

								)

								));

								$loop = new WP_Query( $args ); ?>

								<tr>

									<th>Date</th>

									<th>Tournament</th>

									<th>Location</th>

									<th>Directions</th>

								</tr>

								<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<tr>

									<td data-th="Date">

										<?php 



				                        $date = get_field('tournament_date');

				                        // $date = 19881123 (23/11/1988)

				                        

				                        // extract Y,M,D

				                        $y = substr($date, 0, 4);

				                        $m = substr($date, 4, 2);

				                        $d = substr($date, 6, 2);

				                        

				                        // create UNIX

				                        $time = strtotime("{$d}-{$m}-{$y}");

				                        

				                        // format date

				                        echo date('m/d', $time);

				                        

				                        ?>

									</td>

									<td data-th="Tournament">

										<?php the_field("tournament_name"); ?>

									</td>

									<td data-th="Location">

										<?php

										$tournament_location_url = get_field('tournament_location_url');

										if($tournament_location_url!=''){ ?>

										<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>

										<?php } else { ?>

										<?php the_field("tournament_location"); ?>

										<?php } ?>

									</td>

									<td data-th="Directions">

										<?php

										$tournament_directions_url = get_field('tournament_directions_url');

										if($tournament_directions_url!=''){ ?>

										<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>

										<?php } ?>

									</td>

								</tr>

								<?php endwhile; else: ?>

								<tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>

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