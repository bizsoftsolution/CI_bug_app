    <!-- HOME SLIDER -->
	
    <section class="slider-container" style="padding:110px 0 25px 0;">
        <div class="" id="masterslider">
            <!-- slide 1 -->
			
         <div class="container">

	
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
			
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
				<?php 
			$i=1;
			
			foreach($slider as $rowslider)
			{
			$item_class = ($i== 1) ? 'item active' : 'item';	
			?>
                <div class="<?php echo $item_class; ?>">
					<img src="<?php echo base_url(); ?>upload/slider/<?php echo $rowslider->banner_background; ?>" alt="Chania">
                </div>
				<?php 
				$i++;
			}
			?>
            </div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
		
            <!-- Left and right controls -->
            
        </div>

		</div>
        <br>
        <div class="clearfix"></div>
    </section>