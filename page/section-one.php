   <?php global $themesbazar; ?>  
 
					<!--==========================
                        Home Gallery section start
                    ===========================--> 
        <div class="home-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-list owl-carousel">
						<?php 
							$themes_bazar = new WP_Query(array(
								'post_type' => 'home-gallery',
								'posts_per_page' =>1,
								'offset' => 0,
								
							));
							while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
                        <div class="item">
                            <div class="gallery_image">
                               <img src="<?php echo get_post_meta(get_the_ID(),'home-photo', true); ?>" alt="image">
                            </div>
                        </div>

                       <?php endwhile ?>

					<?php 
						$how_post= $themesbazar['how_post_home'];
						$total_how_post=$how_post-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'home-gallery',
							'posts_per_page' => $total_how_post,
							'offset'     =>1,
						));
						while($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
                        <div class="item">
                            <div class="gallery_image">
                               <img src="<?php echo get_post_meta(get_the_ID(),'home-photo', true); ?>" alt="image">
                            </div>
                        </div>
						
						<?php endwhile ?>

                       
                                
                                
                    </div>
                </div>
            </div>
        </div>
                         
                           <!--==========================
                                Home Gallery section End
                            ===========================--> 
                                     