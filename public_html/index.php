<?php require_once(__DIR__ . "/../resources/config.php"); ?>
<?php include(__DIR__ . "/../resources/templates/head.php"); ?>
<?php include(__DIR__ . "/../resources/templates/navbar.php"); ?>

    <div class="parallax-container" data-parallax="scroll" data-position="top" data-speed=".2"
    data-bleed="10" data-image-src="images/car.jpg" data-natural-width="900" data-natural-height="624">
		  <h1 class="parallax-header milton animated-index-header">
        Silver Cloud Society
      </h1>
    </div>

    <section class="text-content">
      <div class="container">
        <?php include(__DIR__ . "/../resources/templates/flashMessages.php"); ?>
        <div class="row">

      	<span class="milton-inline">Silver Cloud Society</span> is a liaison of independent film producers and other creative minded professionals, including but not limited to writers, screenwriters, social media pros, social media geeks and publicists. 
        </div>
      	<div class="row">
      		<!--<img src="images/film_crew.jpg" class="centered_img"/>-->
          <div class="col-xs-12 col-md-6 col-md-offset-3 video-container">
            <video src="videos/chicago.mp4" controls="true"></video>
          </div>
      	</div>
      	
        <div class="row">
      	<h3>WHAT WE DO</h3>
      	Watching a film is a lot like dreaming. A good film creates an immersive fantasy that we forget is not real--much like a dream. As we are unaware of how active our mind is while we dream, so the filmmaker works ferociously behind the scenes to create a seamless sensory tapestry.  As the architects of these celluloid dreams, we must strive on both a creative and a technical level.  Only in the union of these two disciplines is the viewer transported into living worlds, emotions, sensations, and thoughts that formerly only dreams could provoke.
        </div>
        <div>&nbsp;</div>
      </div>
    </section>

    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" 
        data-image-src="images/house.png" 
        data-natural-width="1400" data-natural-height="1050" data-speed="-0.1">
    	<!--<h3 class="parallax-header" id="parallax-header-2">We strive to be a creative, artistic and redemptive presence in the way we do our business and the quality of our work.</h3>-->
    </div>

<?php include(__DIR__ . "/../resources/templates/foot.php"); ?>






