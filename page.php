<?php get_header() ?>
        <?php global $themesbazar ?>
			

	
			
	<!-- Section 06 (top two div) #################################--> 	

		
		
		<!--Page --->
		<div class="create-page-section"> 
			<div class="container"> 
				<div class="row">
					<div class="col-md-12 col-sm-12">
						
					   <?php if(have_posts()) : ?>
					   <?php while(have_posts()) : the_post(); ?>
											   
							<div class="create-page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>

							 <div class="create-page-content"><?php the_content();?> </div> 
					   
					   
						 <?php endwhile;?>
						<?php endif;?>
						
						
					</div>	
				</div>			
			</div>
		</div>
			
	<?php get_footer();
			get_template_part('include/root');
			wp_footer();
			?>