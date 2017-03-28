<div class="gdlr-item-title-wrapper gdlr-item pos-left ">
	<div class="gdlr-item-title-head">
		<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Upcoming Tournaments</h3>
		<div class="clear"></div>
	</div>
</div>
<div class="gdlr-item gdlr-league-table-item" style="margin-bottom: 60px;">
	<table class="gdlr-small-league-table">
		<tbody>
			<tr class="gdlr-table-second-head">
				<th class="gdlr-table-date">Date</th>
				<th class="gdlr-table-name">Name</th>
			</tr>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php
			$today = date('Ymd');
			$args = array( 'post_type' => 'tournament', 'meta_key' => 'tournament_date', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'posts_per_page' => 10,  'meta_query' => array(
				array(
					'key'		=> 'tournament_date',
			        'compare'	=> '>=',
			        'value'		=> $today
				)
			));
			$loop = new WP_Query( $args ); ?>
			<?php if ($loop->have_posts() ): while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<tr class="gdlr-table-second-head">
					<td class="gdlr-table-date">
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
					<td class="gdlr-table-name"> 
						<?php the_field("tournament_name"); ?>
					</td>
				</tr>
            <?php endwhile; else: ?>
        		<tr><td colspan="2"><?php _e( 'Sorry, no tournaments at this time.' ); ?></td></tr>
				<?php endif; wp_reset_query(); ?>
			<?php endwhile;	?>
		</tbody>
	</table>
	<a class="gdlr-full-table-link gdlr-button with-border" href="http://nepridebaseball.com/schedules">View All Tournaments</a>
</div>