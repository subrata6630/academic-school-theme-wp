     <?php global $themesbazar; ?>   
            
					<!--================================
							footer-section-start
                      ===============================-->
    <div class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="footer-menu-title">
                       <?php echo $themesbazar['f-menu-one']?>
                    </div>
                     <div class="footer-menu">
                         <?php
							wp_nav_menu( array('theme_location' => 'footermenuone',
							)); ?>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="footer-menu-title">
                       <?php echo $themesbazar['f-menu-two']?>
                    </div>

                    <div class="footer-menu">
                       <?php
							wp_nav_menu( array('theme_location' => 'footermenutwo',
							)); ?>
                    </div>
                </div>   
                   
                <div class="col-md-3 col-sm-3 col-xs-6">
                    
                    <div class="footer-menu-title">
                       <?php echo $themesbazar['f-menu-three']?>
                    </div>

                    <div class="footer-menu">
                       <?php
							wp_nav_menu( array('theme_location' => 'footermenuthree',
							)); ?>
                    </div>
                    
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-6">
                    
                    <div class="footer-menu-title">
                        <?php echo $themesbazar['f-menu-four']?>
                    </div>
                    
                    <div class="f-address-content">
                        <div class="footer-icon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                     
                        <?php echo $themesbazar['f-address']?>
                    </div>
                     
                    <div class="f-address-content">
                        <div class="footer-icon">
                          <i class="fa fa-phone"></i>
                        </div>
                       <?php echo $themesbazar['f-phone']?>
                    </div>
                    
                    <div class="f-address-content">
                        <div class="footer-icon">
                          <i class="fa fa-fax"></i>
                        </div>
					<?php echo $themesbazar['fax']?>
                    </div>
                    
                    <div class="f-address-content">
                        <div class="footer-icon">
                          <i class="fa fa-envelope"></i>
                        </div>
                       <?php echo $themesbazar['f-gmail']?>
                    </div>
                    
                    <div class="f-address-content">
                        <div class="footer-icon">
                          <i class="fa fa-star"></i>
                        </div>
                         <?php echo $themesbazar['f-code']?>
                    </div>
                    
                    <div class="f-address-content">
                        <div class="footer-icon">
                          <i class="fa fa-home"></i>
                        </div>
                         <?php echo $themesbazar['college-code']?>

                    </div>
                    
                </div>
            </div>
            
                    
            
        </div>
    </div>    
                        <!--================================
                              footer-section-End
                        ===============================--> 
                            
                             
                             
                   
                 
                 
                 
                 
  
             
        
        <!--==================== menu-script-start ============ -->
        <script>
			window.onscroll = function() {myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
		</script>
        
        <!--==================== menu-script-End ============ -->
        
        
        

        

       <?php 
			get_template_part('include/root');
			wp_footer();
			?>
    </body>
</html>