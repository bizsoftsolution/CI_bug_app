<footer class="footer footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-12">
                    <div class="footer_block">
                        <a href="<?php echo base_url(); ?>" class="f_logo"><img src="<?php echo base_url(); ?>upload/logo.png" class="img-responsive" alt="logo">
                        </a>
                        <h1>Connecting Drivers Globally</h1>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 col-xs-12">
                    <div class="footer_block">
                        <h4>Hot Links</h4>
                        <ul class="footer-links">
                            <li> <a href="#">Home</a> </li>
                            <li> <a href="#">About Us</a> </li>
                            <li> <a href="#">Privacy</a> </li>
                            <li> <a href="#">Contact Us</a> </li>
                            <li> <a href="#">Term & Conditions</a> </li>
                            <li> <a href="#">Carrers</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12">
                    <div class="footer_block dark_gry1">
                        <h4>Follow Us</h4>

                                <ul class="social-network social-circle onwhite pull-right">
                     <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                           
                       
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <div class="footer_block">
                        <h4>Subscribe us to get Special Offer</h4>
                        <ul class="personal-info">
                            <!-- <li><i class="fa fa-map-marker"></i> 3rd Floor,Link Arcade Model Town, BBL, USA.</li>
                            <li><i class="fa fa-envelope"></i> Support@domain.com</li>
                            <li><i class="fa fa-phone"></i> (0092)+ 124 45 78 678 </li>
                            <li><i class="fa fa-clock-o"></i> Mon - Sun: 8:00 - 16:00</li> -->
                            <form class="form-inline">
                            <span class="col-md-6"><input type="text" class="form-control" name="subscribe"/></span><button type="submit" class="btn btn-danger">Subscribe</button></form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
     <section class="footer-bottom-section light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p>Copyright ©2017 - All rights Reserved. Designed By <a href="http://denariusoft.com"> Denariusoft </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- LOGIN MODEL  -->
       <div class="modal fade cart-model" id="cart-model" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="login-logo">
                    <h2>Cart Model</h2>
                </div>
                <div class="login-box-inner">
                    <form>
                    <?php if($cart = $this->cart->contents());?>
                    
                       <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cart as $item) {
                            # code...
                        ?>
                            <tr>
                                <td><?php echo $item['name'];?></td>
                                <td><?php echo $item['qty'];?></td>
                                <td><?php echo $item['subtotal'];?></td>
                                <td><a href="<?php echo base_url();?>Front/removeCart/<?php echo $item['rowid']; ?>"><i class="fa fa-remove"></i></a></td>
                            </tr>
                          <?php 
                          }
                          ?>  
                          <tr>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $this->cart->total();?></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table> 
                        <span class="col-md-3 col-md-offset-3">
                            <a href="<?php echo base_url();?>front/checkout" class="btn btn-success">
                                <span class="fa fa-arrow-left"></span>&nbsp;&nbsp;&nbsp;&nbsp;Checkout&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-arrow-right"></span>
                            </a>   
                        </span>
                    

                      
                        
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade login-model" id="login-model" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="login-logo">
                    <h2>Sign In</h2>
                </div>
                <div class="login-box-inner">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="text" placeholder="Email Address">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="remember-me-wrapper">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox-nice">
                                        <input type="checkbox" class="remember-me" checked="checked" />
                                        <label>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="login-forget-link col-xs-6">
                           Forgot password?
                           </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-default col-xs-12">Login</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="social-text">Or login with</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <button type="submit" class="btn btn-primary col-xs-12 btn-facebook">
                                    <i class="fa fa-facebook"></i> Facebook
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <button type="submit" class="btn btn-primary col-xs-12 btn-twitter">
                                    <i class="fa fa-twitter"></i> Twitter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- REGISTERATION MODEL  -->
    <div class="modal fade register-model" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="login-logo">
                    <h2>Register Now</h2>
                </div>
                <div class="login-box-inner">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="text" placeholder="Email Address">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder=" Phone Number">
                        </div>
                        <div class="remember-me-wrapper">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox-nice">
                                        <input type="checkbox" class="remember-me" checked="checked" />
                                        <label>
                                            I Accept
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="login-forget-link col-xs-6">
                           Term and Conditions
                           </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-default col-xs-12">Sign Up</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="social-text">Or Register with</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <button type="submit" class="btn btn-primary col-xs-12 btn-facebook">
                                    <i class="fa fa-facebook"></i> Facebook
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <button type="submit" class="btn btn-primary col-xs-12 btn-twitter">
                                    <i class="fa fa-twitter"></i> Twitter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT JS  -->
   
    <!-- JQUERY MIGRATE  -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery-migrate-1.2.1.min.js'); ?>"></script>
    
    <!-- JQUERY SELECT -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/select2.min.js'); ?>"></script>
    <!-- MEGA MENU -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/bootstrap-dropdownhover.js'); ?>"></script>
    <!-- JQUERY EASING -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/easing.js'); ?>"></script>
    <!-- JQUERY COUNTERUP -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/counterup.js'); ?>"></script>
    <!-- JQUERY WAYPOINT -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/waypoints.min.js'); ?>"></script>
    <!-- JQUERY REVEAL -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/footer-reveal.min.js'); ?>"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/owl-carousel.js'); ?>"></script>
    <!-- MOBILE MENU JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery.meanmenu.js'); ?>"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url('assets/frontend/js/color-switcher.js'); ?>"></script>
    <!-- CORE JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/custom.js'); ?>"></script>
    <!-- RANGE SLIDER JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/nouislider.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/wNumb.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/masterslider/js/masterslider.min.js'); ?>"></script>
	
	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvL6_23zI-1JvUttxkt2K0KO4tfE1SiGk"></script> 
      <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/map-home.js'); ?>"></script>
	    

    <script type="text/javascript">
        (function($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1400, // slider standard width
                height: 625, // slider standard height
                space: 0,
                speed: 45,
                layout: 'fillwidth',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });
        })(jQuery);
    </script>
    <script type="text/javascript">
        var slider = document.getElementById('keyboard');

        noUiSlider.create(slider, {
            start: 25,
            step: 10,
            connect: [true, false],
            range: {
                'min': 5,
                'max': 50
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
                prefix: ' Radius  = ',
                postfix: ' (Km) ',
            })
        });

        keyboard.noUiSlider.on('update', function(values, handle) {
            keyboardspan.innerHTML = values[handle];
        });

        var handle = slider.querySelector('.noUi-handle');

        handle.setAttribute('tabindex', 0);

        handle.addEventListener('click', function() {
            this.focus();
        });

        handle.addEventListener('keydown', function(e) {

            var value = Number(slider.noUiSlider.get());

            switch (e.which) {
                case 37:
                    slider.noUiSlider.set(value - 10);
                    break;
                case 39:
                    slider.noUiSlider.set(value + 10);
                    break;
            }
        });
    </script>
	
	
</body>



</html>