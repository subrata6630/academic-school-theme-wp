<?php  
get_header();
global $themesbazar;

?>


        
                   
					<!--================================
							Archive-Page-start
                      ===============================-->        
   <div class="archive-page">
       <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                           <th scope="col"><?php echo $themesbazar['in-dat']?></th>
                         <th scope="col"><?php echo $themesbazar['in-tit']?> </th>
                         <th scope="col"><?php echo $themesbazar['in-viwe']?></th>
                          <th scope="col"><?php echo $themesbazar['in-down']?></th>
                       
                        </tr>
                    </thead>
						<?php
						while ( have_posts() ) : the_post(); ?>
                    <tbody>
                        <tr>
                          <th class="inform"><?php echo get_the_time("F j, Y"); ?></th>

                            <td class="inform"> <?php the_title(); ?></td>
                            <td class="viwe"><a href="<?php the_permalink();?>"><i class="fa fa-eye"></i>Viwe</a></td>
                            <td class="inform"> <a href="<?php echo get_post_meta(get_the_ID(),'inform-file', true); ?>"><?php echo get_post_meta(get_the_ID(),'inform-t', true); ?></a></td>
                        </tr>
                        
                    </tbody>
					<?php endwhile; ?>
			        
   
					
					
                </table>
			<div class="col-md-12"><?php wp_bootstrap_pagination(); ?></div>

           </div>
       </div>
   </div>
					<!--================================
							Archive-Page-End
                      ===============================-->
	        
        
                  
                  
                  
                  
                                     
				

<?php get_footer();
	wp_footer();
	?>