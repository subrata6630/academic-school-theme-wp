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
                          <th scope="col"> <?php echo $themesbazar['nu-title']?></th>
                         <th scope="col"><?php echo $themesbazar['na-title']?> </th>
                         <th scope="col"><?php echo $themesbazar['des-title']?></th>
                          <th scope="col"><?php echo $themesbazar['img-title']?></th>
                          <th scope="col"><?php echo $themesbazar['dat-title']?></th>
                        </tr>
                    </thead>
					<?php if(have_posts()) : ?>
                     <?php
                     while(have_posts()) : the_post();?>
                     
                    <tbody>
                        <tr>
                          <th class="wrpper" scope="row"><?php echo get_post_meta(get_the_ID(),'number-t', true); ?></th>

                            <td class="wrpper">  <?php the_title(); ?> </td>
                            <td class="wrpper"><?php echo get_post_meta(get_the_ID(),'teacher-deg', true); ?></td>
                            <td >
                                <div class="image">
                                   <img src="<?php echo get_post_meta(get_the_ID(),'teacher_imgage', true); ?>" alt="">
                                </div>
                            </td>
                            <td class="wrpper"> <a href="<?php the_permalink()?>"><?php echo $themesbazar['red-title']?></a></td>
                        </tr>

                    </tbody>
						<?php endwhile; ?>
                    <?php endif; ?>  
			        
			  
   
					
					
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