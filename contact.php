<?php /* Template Name: Contact Us */ ?>

<?php  
get_header();
global $themesbazar;

?>

                             <!--==========================
                                 Contact page start
                            ===========================--> 
    
        
        
        
        <div class="page-contact-from">
            <div class="container">
                <div class="page-from-wpper">
                  <div class="page-from-title">
                       <?php echo $themesbazar['from-t']?>
                  </div>
					
                   <?php echo do_shortcode('[contact-form-7 id="164" title="Contact form 1"]'); ?>
                    
                </div>
            </div>
            
        </div>
        
    
    
    <div class="maps-section">
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
               		<iframe src="<?php echo $themesbazar['location-map']?>" width="100%" height="<?php echo 						$themesbazar['map-height']?>" frameborder="0" style="border:0" allowfullscreen>							</iframe>
           		</div>
			</div>
          </div>
    </div>
                     
                            <!--==========================
                                Contact page End
                            ===========================--> 
                                    
                                    
                                    
                                             
  
    <?php get_footer();
	wp_footer();
	?>
