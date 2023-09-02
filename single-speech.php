<?php  
get_header();
global $themesbazar;

?> 



		<div class="single-about-page">
			<div class="container">
				<div class="row">
						
					<div class="col-md-10 col-md-offset-1">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
						<div class="single-about-title">
							<?php the_title() ?>
						</div>	
						
						<div class="single-about-content">
							<?php the_content() ?> 
						</div>
						  
						   
						
					</div>
					<?php endwhile;?>
					<?php endif;?>	

				</div>
			</div>
		</div>











       
<?php get_footer();?>

