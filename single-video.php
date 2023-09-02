<?php  
get_header();
global $themesbazar;

?> 
	<div class="single-video-page">
       <div class="container">
 <?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>	   
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="single-video">
						<?php echo get_post_meta(get_the_ID(),'video-t', true); ?>
					</div>


					<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
					   <?php $url =  esc_url(get_post_meta( get_the_ID(), 'video-l', 1 ));
						?>
						<?php  echo wp_oembed_get( $url );  ?>
					</div>



				</div>
			</div>
			
		<?php endwhile;?>
		<?php endif;?>	
			
		</div>
	</div>
 
          		<?php get_footer();?>