  <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 col-lg-6 mx-auto mb-4 text-center text-lg-left">
              <h2 class="mb-3 fs-1 fw-bold">
                <span>Lorem ipsum</span>
                <span class="text-primary">dolor sit</span>
                <span>amet, consectetur adipiscing.</span>
              </h2>
              <p class="text-muted mb-0">Integer felis tellus, rhoncus ac pulvinar vitae.</p>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
              <div class="row justify-content-center justify-content-lg-end">
                <div class="col-12 col-md-6 col-lg-8 mb-3 mb-md-0">
                  <div class="input-group">
                    <span class="input-group-text px-3 bg-light rounded-left">
                      <svg width="24" height="24" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                      </svg>
                    </span>
                    <input class="form-control" type="text" placeholder="Type your e-mail">
                  </div>
                </div>
                <div class="col-12 col-md-auto">
                  <button class="w-100 btn btn-primary" type="submit">Sign Up</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php if (is_active_sidebar('footer-1')) {
            dynamic_sidebar('footer-1');
        } ?>
      </div>
      <div class="col-md-3">
        <?php if (is_active_sidebar('footer-2')) {
            dynamic_sidebar('footer-2');
        } ?>
      </div>
      <div class="col-md-3">
        <?php if (is_active_sidebar('footer-3')) {
            dynamic_sidebar('footer-3');
        } ?>
      </div>
      <div class="col-md-3">
        <?php if (is_active_sidebar('sidebar-4')) {
            dynamic_sidebar('footer-4');
        } ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="copyright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>. All Rights Reserved.</small></p>
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .container -->
</footer>
 
<?php wp_footer(); ?>

 <script src="<?php echo get_bloginfo('template_directory'); ?>/assets//js/bootstrap.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets//js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/readability.js"></script>
        <script>
var $=jQuery.noConflict();
$(document).ready(function(){
    
            $("#text").readability(function(result){
                $("#read-count-result").html("<b>Reading time is around</b> <span class='badge bg-danger'>"+Math.ceil(result.time)+"minutes</span>");
                if(result.readingEase <= 15)
                    difficulty = "Very Difficult"
                else if(result.readingEase <= 30)
                    difficulty = "Difficult"
                else if(result.readingEase <= 60)
                    difficulty = "Medium"
                else if(result.readingEase <= 80)
                    difficulty = "Easy"
                else if(result.readingEase <= 100)
                    difficulty = "Very Easy"

                $("#read-difficulty").html("<b>This text is</b> <span class='badge bg-danger'>"+difficulty+"</span>");
            });
});
        </script>
  </body>
</html>