<?php get_header(); ?>
<div class="gdlr-content">
  <section id="content-section-1">
    <div class="section-container container">
      <div class="fixture-result-item-wrapper" style="margin-bottom: 80px;" data-ajax="http://demo.goodlayers.com/realsoccer/wp-admin/admin-ajax.php">
        <div class="gdlr-item gdlr-accordion-item style-1">
          <?php
            $cats = get_terms( array(
              'taxonomy' => 'team_category',
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
                    <th>Number</th>
                    <th>name</th>
                    <th>GradUation year</th>
                    <th>school</th>
                    <th>Position</th>
                  </tr>
                  <?php
                    $args = array(
                      'post_type' => 'team',
                      'meta_key' => 'player_name',
                      'orderby' => 'meta_value',
                      'order' => 'ASC',
                      'tax_query' => array(
                    		array(
                    			'taxonomy' => 'team_category',
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
                    <?php endwhile;  ?>
                  <?php else: ?>
                    <tr><td colspan="5" data-th="Players"><?php _e( 'Sorry, no player roster at this time.' ); ?></td></tr>
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
