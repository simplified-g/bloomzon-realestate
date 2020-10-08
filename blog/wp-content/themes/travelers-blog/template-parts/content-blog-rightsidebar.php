<!--<div class="list-item">

    <div class="row mb-50">-->
			
		<?php

		$no_image_class = 'tb_no_image';

		if ( has_post_thumbnail() ) {

			$no_image_class = ''; ?>

			<div class="col-xs-12 col-sm-6 col-md-4" style="margin-bottom:50px;">
				<div class="list-image" style="margin-bottom:15px;">
					<a href="<?php the_permalink(); ?>" >
						<?php 
						$imageID = get_post_thumbnail_id(); 
						$image = wp_get_attachment_image_src($imageID,'travelers_blog_medium'); ?>
						<img src="<?php echo esc_url( !empty($image[0]) ? $image[0] : '' ); ?>" alt="">
						<div class="image-overlay"></div>
					</a>
				</div>
				<div class="list-content <?php echo esc_attr( $no_image_class ); ?>">
					<h3>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_title(); ?>							
						</a>
					</h3>

					<?php travelers_blog_get_all_categories(); ?>
				
					<div class="post-content">
						<?php the_excerpt(); ?>			
					</div>

					<div class="author-detail">
	      				<?php travelers_blog_get_author_detail(); ?>     
	    		    </div>

				</div>
		  </div>
		  
          <?php } ?>
			<!--<div class="col-xs-8">

	</div>                        
</div>-->