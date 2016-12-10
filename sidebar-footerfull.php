<?php if ( is_active_sidebar( 'footerfull' ) ): ?>

    <!-- ******************* The Hero Widget Area ******************* -->

    <div class="wrapper" id="wrapper-footer-full">
    
    
        <div class="container-fluid">
          
          
          <div class="row">
            
            
              <div class="col-md-3">
                
                <?php dynamic_sidebar( 'footerleft' ); ?>
                
              </div>
            
            
              <div class="col-md-3">
                
                <?php dynamic_sidebar( 'footerleftcenter' ); ?>
                
              </div>
            
            
            
              <div class="col-md-3">
                
                <?php dynamic_sidebar( 'footerrightcenter' ); ?>
                
              </div>
            
            
              <div class="col-md-3">
                
                <?php dynamic_sidebar( 'footerright' ); ?>
                
              </div>
            
            
          </div>
          
          
        </div>
		

    </div><!-- #wrapper-footer-full -->

<?php endif; ?>
