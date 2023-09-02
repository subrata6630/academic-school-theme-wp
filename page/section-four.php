      <?php global $themesbazar; ?>   
	  
                            <!--==========================
                                Tab section Start
                            ===========================--> 
        <div class="tab-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <div class="container">
			<div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="tab-section-wrpp">
                        <div class="tab-seciton-title">
                             <?php echo $themesbazar['tab-t']?>
                        </div>

                        <div class="tab-seciton-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-tab manu-tav">
                      
					  
					        <?php
								$information_ids = (!empty($themesbazar['information-cats'])) ? $themesbazar['information-cats'] : 'empty';      
								if($information_ids != 'empty'):
							?>
                            <ul class="tab-list">
							
							    <?php 
									//print_r( $information_ids);
                                $count = 0;
                                foreach($information_ids as $information_id)
                                {
                                    $term = get_term_by( 'id', $information_id, 'infocats' );
                                    $info_cat_name = $term->name;
                                    $info_cat_slug = $term->slug;
                                
                                    $active = '';
                                    if($count == 0){
                                        $active = 'active';
                                    }

							        echo '<li class="'.$active.' tab-wrpp">
										<a data-toggle="tab" href="#'.$info_cat_slug.'"> 
										<span class="tab-icons-image">
										</span> 
										  <span>'.$info_cat_name.'</span> 
										</a>
									</li>';
                                    $count++;
									}
								?>

                            </ul>  

                            <div class="tab-content">
							
							
								<?php 
									$counter = 0;
									foreach($information_ids as $information_id){
										$term = get_term_by( 'id', $information_id, 'infocats' );
										$info_cat_name = $term->name;
										$info_cat_slug = $term->slug;
									
											
									$active = '';
									if($counter == 0){
										$active = 'in active';
									}

								?>
                                <div id="<?php echo $info_cat_slug; ?>"  class="tab-pane fade <?php echo $active; ?>">
                                   
									<?php
									$args = array( 
										'post_type' => 'information',
										'posts_per_page' => -1, 
										'orderby' => 'DESC',
										  'tax_query' => array(
											'relation' => 'OR',
											array(
												'taxonomy' => 'infocats',
												'field'    => 'slug',
												'terms'    => $info_cat_slug,
											),
								
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
								   <div class="border">
                                        <div class="row">
                                        
                                           <div class="col-md-2">
                                                <div class="date"><?php echo get_the_time("j"); ?></div>
                                                 <div class="calend"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.png" alt=""><?php echo get_the_time("F Y"); ?> </div>
												 
												 
                                           </div>
                                            <div class="col-md-10">
                                               <div class="icon-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico7.png" alt="">

                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                  </div>
                                            </div>
                                        </div>
                                    </div> 
									<?php endwhile; wp_reset_query(); ?>
                             
                           
                                </div>
								<?php $counter++; } ?>
                             
                            </div>
							<?php endif; ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
                            
                            <!--==========================
                                Tab section End
                            ===========================--> 
                           