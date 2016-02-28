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
			$args = array( 'post_type' => 'tournament', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 10);
			$loop = new WP_Query( $args ); ?>
			<?php if ($loop->have_posts() ) while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<tr class="gdlr-table-second-head">
					<td class="gdlr-table-date">
						<?php 
							$date = DateTime::createFromFormat('Ymd', get_field('tournament_date'));
							echo $date->format('m/d'); 
						?>
					</td>
					<td class="gdlr-table-name"> 
						<?php the_field("tournament_name"); ?>
					</td>
				</tr>
			<?php endwhile;	?>
			<?php endwhile; // end of the loop. ?>
		</tbody>
	</table>
	<a class="gdlr-full-table-link gdlr-button with-border" href="/schedules">View All Tournaments</a>
</div>