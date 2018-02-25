<?php get_header(); ?>
<div class="gdlr-content">
  <section id="content-section-1">
    <div class="section-container container">
      <div class="fixture-result-item-wrapper" style="margin-bottom: 80px;" data-ajax="http://demo.goodlayers.com/realsoccer/wp-admin/admin-ajax.php">
        <div class="gdlr-item gdlr-accordion-item style-1">
          <?php
            $cats = get_terms( array(
              'taxonomy' => 'tournaments_category',
              'hide_empty' => true,
              'orderby' => 'name',
              'order' => 'ASC'
            ));
           ?>
          <?php foreach ($cats as $cat): ?>
            <div class="accordion-tab">
              <h4 class="accordion-title"><i class="icon-plus"></i><span><?php echo $cat->name; ?></span></h4>
              <div class="accordion-content">
                <table class="schedules">
                  <tr>
										<th>Date</th>
										<th>Tournament</th>
										<th>Location</th>
										<th>Directions</th>
                  </tr>
                  <?php
                    $args = array(
                      'post_type' => 'tournament',
                      'meta_key' => 'tournament_date',
                      'orderby' => 'meta_value_num',
                      'order' => 'ASC',
                      'tax_query' => array(
                    		array(
                    			'taxonomy' => 'tournaments_category',
                    			'field'    => 'slug',
                    			'terms'    => $cat->name,
                    		),
                    	)
                    );
                    $loop = new WP_Query( $args );
                  ?>
                  <?php if ($loop->have_posts()): ?>
                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
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
													<?php $tournament_location_url = get_field('tournament_location_url'); ?>
													<?php if($tournament_location_url!=''): ?>
														<a href="<?php the_field("tournament_location_url"); ?>" target="_blank"><?php the_field("tournament_location"); ?></a>
													<?php else: ?>
														<?php the_field("tournament_location"); ?>
													<?php endif; ?>
												</td>
												<td data-th="Directions">
													<?php $tournament_directions_url = get_field('tournament_directions_url'); ?>
													<?php if ($tournament_directions_url!=''): ?>
														<a href="<?php the_field("tournament_directions_url"); ?>" target="_blank">View Directions</a>
													<?php endif; ?>
												</td>
											</tr>
                    <?php endwhile;  ?>
                  <?php else: ?>
                    <tr><td colspan="4" data-th="Tournaments"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>
                  <?php endif; ?>
                </table>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</div><!-- gdlr-content -->
<?php get_footer(); ?>
