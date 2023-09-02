							
			<?php global $themesbazar; ?>   	
							<!--==========================
                                teacher Section Start
                            ===========================--> 
    <div class="teacher-seciton wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="teacher-section-wrpp">
						<?php
						$cat = $themesbazar['cat-one'];
						$category_name = get_the_category_by_id($cat);
					
						?>
                        <div class="teacher-seciton-title">
                             <?php echo $category_name;?> 
                        </div>

                        <div class="teacher-seciton-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-image.png" alt="">
                        </div>
                    </div>
                        
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="teacher-list owl-carousel">
				
						<?php
							$cat = $themesbazar['cat-one'];
							$category_name = get_the_category_by_id($cat);
							$category_name_link = get_category_link($cat);
							$themes_bazar = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' =>1,
								'offset' => 0,
								'cat' => $cat,

							));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>

                        <div class="teacher-wrpp">
							<div class="teacher-image">
                                <img src="<?php echo get_post_meta(get_the_ID(),'teacher_imgage', true); ?>" alt="">
                            </div>
                            <div class="teacher-name">
                                <?php the_title(); ?>
                            </div>       
                        							
                            <div class="teacher-deg">
                               <?php echo get_post_meta(get_the_ID(),'teacher-deg', true); ?>
                            </div>
                            
                        </div>
                        
						<?php endwhile; ?>	 
                     
						<?php
							$category_name = get_the_category_by_id($cat);
							$how_cat= $themesbazar['how_post_teachers'];
							$total_how_cat=$how_cat-1;
							$themes_bazar = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' => $total_how_cat,
								'offset' => 1,
								'cat' => $cat,

							));
							while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						<div class="teacher-wrpp">
							<div class="teacher-image">
                                <img src="<?php echo get_post_meta(get_the_ID(),'teacher_imgage', true); ?>" alt="">
                            </div>
                            <div class="teacher-name">
                                <?php the_title(); ?>
                            </div>       
                        							
                            <div class="teacher-deg">
                               <?php echo get_post_meta(get_the_ID(),'teacher-deg', true); ?>
                            </div>
                            
                        </div>
                        
						<?php endwhile; ?>	 
             
                       
                    </div>
                </div>
            </div>
        </div>
    </div>   
                            <!--==========================
                                 Teacher Section End
                            ===========================--> 
                                  