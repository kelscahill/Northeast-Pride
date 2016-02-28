
<h1 class="gdlr-blog-title"><?php the_field("coach_name"); ?></h1>
<h4><?php the_field("coach_title"); ?></h4>
<?php
$coach_image = get_field('coach_image');
if($coach_image): ?>
<img src="<?php echo $coach_image['url']; ?>" alt="<?php echo $coach_image['alt']; ?>" width="400" height="400" draggable="false" style="float:left;max-width:150px;margin: 0px 15px 15px 0px;" />
<?php endif; ?><?php the_field("coach_description"); ?>