<?php if($message): ?>
   <div class="alert text-white bg-danger" role="alert">
      <div class="iq-alert-icon">
         <i class="ri-information-line"></i>
      </div>
      <div class="iq-alert-text"><?php echo $message; ?></div>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="ri-close-line"></i>
      </button>
   </div>
<?php endif;?>

      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Sign In</h2>
                        <p>Login to stay connected.</p>
                        <?php echo form_open("login");?>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="identity" id="email" required />
                                    <label class="form-label" for="email">Email</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password" required />
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="custom-control custom-checkbox mb-3 text-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Sign In</button>
                           <p class="mt-3">
                              Create an Account <a href="auth-sign-up.html" class="text-primary">Sign Up</a>
                           </p>
                        <?php echo form_close();?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="<?php //echo base_url(); ?>assets/js/backend-bundle.min.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/customizer.js"></script>
    
    
    <!-- app JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>  </body>
</html>