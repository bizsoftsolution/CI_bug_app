    <!-- HOME SLIDER -->
    <section class="slider-container">
        <div class="master-slider ms-skin-default" id="masterslider">
            <!-- slide 1 -->
			<?php 
				foreach($slider as $res)
				{
			?>
            <div class="ms-slide slide-1" data-delay="9">
                <img src="<?php echo base_url(); ?>assets/frontend/masterslider/js/blank.gif" 
				data-src="<?php echo base_url(); ?>upload/slider/<?php echo $res->banner_background; ?>" alt="" />
                <img src="<?php echo base_url(); ?>assets/frontend/masterslider/blank.gif" 
				data-src="<?php echo base_url(); ?>upload/slider/<?php echo $res->image1; ?>" alt="" style="left:40px; top:210px;" class="ms-layer" data-type="image" data-delay="1000" data-duration="2500" data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />
                <img src="<?php echo base_url(); ?>assets/frontend/masterslider/blank.gif" 
				data-src="<?php echo base_url(); ?>upload/slider/<?php echo $res->image2; ?>" alt="" style="left:750px; top:210px;" class="ms-layer" data-type="image" data-delay="1900" data-duration="2500" data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />
                <!--  <h3 class="ms-layer offerbadge orange-2"
                  style="top: 150px; left:550px;"
                  data-type="text"
                  data-delay="1500"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="scale(1.5,1.6)"> New Car <br/>
                  <span class="price">$944</span><br/>
                  /Year
               </h3>
               <h3 class="ms-layer offerbadge two"
                  style="top: 250px; left:650px;"
                  data-type="text"
                  data-delay="2000"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="scale(1.5,1.6)"> Up to <br/>
                  <span class="price two">50%</span><br/>
                  /Off
               </h3> -->
                <!-- <h3 class="ms-layer text1"
                  style="right: 400px;top: 160px;"
                  data-type="text"
                  data-delay="2500"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="right(250)"> Perfect </h3>
               <h3 class="ms-layer text2 margin-top"
                  style="right: 110px;top: 200px;"
                  data-type="text"
                  data-delay="3000"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="left(250)">Choice In luxury </h3>
               <h3 class="ms-layer text4 margin-top2"
                  style="top: 260px; left:840px;"
                  data-type="text"
                  data-delay="3500"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="right(250)"> <i class="fa fa-check"></i> FREE Wheel Installation</h3>
               <h3 class="ms-layer text4 margin-top2"
                  style="top: 285px; left:840px;"
                  data-type="text"
                  data-delay="3600"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="right(250)"> <i class="fa fa-check"></i> FREE Punchure Repair</h3>
               <h3 class="ms-layer text4 margin-top2"
                  style="top: 310px; left:840px;"
                  data-type="text"
                  data-delay="3700"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="right(250)"> <i class="fa fa-check"></i> FREE Security Suite</h3>
               <h3 class="ms-layer text4 margin-top2"
                  style="top: 335px; left:840px;"
                  data-type="text"
                  data-delay="3800"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="right(250)"> <i class="fa fa-check"></i> FREE Wheel Changing Tools</h3>
               <h3 class="ms-layer text4 margin-top2"
                  style="top: 360px; left:840px;"
                  data-type="text"
                  data-delay="3900"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="right(250)"> <i class="fa fa-check"></i> FREE Engine & Tyre Checking</h3>
               <a class="ms-layer btn sbut2 white margin-top2"
                  style="right: 400px; top: 460px;"
                  data-type="text"
                  data-delay="4000"
                  data-ease="easeOutExpo"
                  data-duration="1200"
                  data-effect="scale(1.5,1.6)"> Read more </a> 
               <a class="ms-layer btn sbut3 margin-top2"
                  style="right: 200px; top: 460px;"
                  data-type="text"
                  data-delay="4000"
                  data-ease="easeOutExpo"
                  data-duration="1200"
                  data-effect="scale(1.5,1.6)"> Get Register Now </a> -->
            </div>
            <!-- end slide 1 -->
			<?php 
				}
			?>
            <!-- slide 2 -->
            <!--div class="ms-slide slide-1" data-delay="4">
                <img src="<?php echo base_url(); ?>assets/frontend/masterslider/js/blank.gif" data-src="<?php echo base_url(); ?>upload/slider/sliderbg.jpg" alt="" />
                <img src="<?php echo base_url(); ?>assets/frontend/masterslider/blank.gif" data-src="<?php echo base_url(); ?>upload/slider/3.png" alt="" style="left:40px; top:210px;" class="ms-layer" data-type="image" data-delay="1000" data-duration="2500" data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />
                <img src="<?php echo base_url(); ?>assets/frontend/masterslider/blank.gif" data-src="<?php echo base_url(); ?>upload/slider/4.png" alt="" style="left:750px; top:210px;" class="ms-layer" data-type="image" data-delay="1900" data-duration="2500" data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />
                <!--                <h3 class="ms-layer offerbadge orange-2"
                  style="top: 350px; left:500px;"
                  data-type="text"
                  data-delay="1500"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="scale(1.5,1.6)"> Premium Pack <br/>
                  <span class="price">$14.99</span><br/>
                  /only
               </h3>
               <h3 class="ms-layer offerbadge two"
                  style="top: 50px; left:570px;"
                  data-type="text"
                  data-delay="2000"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="scale(1.5,1.6)"> Up to <br/>
                  <span class="price two">50%</span><br/>
                  /Offer</h3>
               <h3 class="ms-layer text1"
                  style="right: 150px;top: 200px;"
                  data-type="text"
                  data-delay="2500"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="scale(1.5,1.6)">buy Puppy </h3>
               <h3 class="ms-layer text2 margin-top"
                  style="right: 150px;top: 240px;"
                  data-type="text"
                  data-delay="3000"
                  data-ease="easeOutExpo"
                  data-duration="1230"
                  data-effect="scale(1.5,1.6)"> Best services </h3>
               <h3 class="ms-layer text3 margin-top"
                  style="right: 150px; top: 310px;"
                  data-type="text"
                  data-effect="top(45)"
                  data-duration="2000"
                  data-delay="3500"
                  data-ease="easeOutExpo"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse <br/>
                  et justo. Praesent mattis commodo augue. 
               </h3>
               <a class="ms-layer btn sbut1 fsize-big margin-top2 btn-default"
                  style="right: 150px; top: 390px;"
                  data-type="text"
                  data-delay="4000"
                  data-ease="easeOutExpo"
                  data-duration="1200"
                  data-effect="scale(1.5,1.6)"> Get Started now </a> 
 ->
            </div-->
            <!-- end slide 2 -->
        </div>
        <div class="clearfix"></div>
    </section>