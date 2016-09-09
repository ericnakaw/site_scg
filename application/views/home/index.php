<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
    	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
    		<li data-target="#myCarousel" data-slide-to="3"></li>
    	</ol>
    	<div class="carousel-inner" role="listbox">
    		<div class="item active">
    			<img class="first-slide cover"  src="<?=base_url('assets/img/carousel4.jpg')?>" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                     <h1>Example headline.</h1>
                     <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                 </div>
             </div>
         </div>
         <div class="item">
           <img class="second-slide cover" src="<?=base_url('assets/img/carousel1.jpg')?>" alt="Second slide">
           <div class="container">
            <div class="carousel-caption">
             <h1>Another example headline.</h1>
             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
             <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
         </div>
     </div>
 </div>
 <div class="item">
   <img class="third-slide cover" src="<?=base_url('assets/img/carousel2.jpg')?>" alt="Third slide">
   <div class="container">
    <div class="carousel-caption">
     <h1>One more for good measure.</h1>
     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
     <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
 </div>
</div>
</div>
<div class="item">
   <img class="third-slide cover" src="<?=base_url('assets/img/carousel3.jpg')?>" alt="Third slide">
   <div class="container">
    <div class="carousel-caption">
     <h1>One more for good measure.</h1>
     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
     <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
 </div>
</div>
</div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

    	<!-- Three columns of text below the carousel -->
    	<div class="row">
    		<div class="col-lg-4">
    			<img class="img-rounded" src="<?=base_url('assets/img/circulo1.jpg')?>" alt="Generic placeholder image" width="300" height="300">
    			<h2>Especiais</h2>
    			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    			<p><a class="btn btn-default" href="#" role="button">Veja mais &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    		<div class="col-lg-4">
    			<img class="img-rounded" src="<?=base_url('assets/img/circulo2.jpg')?>" alt="Generic placeholder image" width="300" height="300">
    			<h2>Mimos</h2>
    			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    			<p><a class="btn btn-default" href="#" role="button">Veja mais &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    		<div class="col-lg-4">
    			<img class="img-rounded" src="<?=base_url('assets/img/circulo3.jpg')?>" alt="Generic placeholder image" width="300" height="300">
    			<h2>Divertidos</h2>
    			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    			<p><a class="btn btn-default" href="#" role="button">Veja mais &raquo;</a></p>
    		</div><!-- /.col-lg-4 -->
    	</div><!-- /.row -->


    	<!-- START THE FEATURETTES -->

    	<hr class="featurette-divider">

    	<div class="row featurette">
    		<div class="col-md-7">
    			<h2 class="featurette-heading">Sinceros votos de <span class="text-muted">felicidades</span></h2>
    			<p class="lead">Que a felicidade a dois continue sendo o objetivo principal de suas vidas. Que a caminhada seja longa, repleta de amor e compreensão.</p>
    		</div>
    		<div class="col-md-5">
    			<img src="<?=base_url('assets/img/retangule1.jpg')?>" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    		</div>
    	</div>

    	<hr class="featurette-divider">

    	<div class="row featurette">
    		<div class="col-md-7 col-md-push-5">
    			<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    			<p class="lead">Um casamento feliz se constrói com muito amor, carinho e compreensão. Que estes sentimentos estejam sempre presentes na vida de vocês!</p>
    		</div>
    		<div class="col-md-5 col-md-pull-7">
    			<img src="<?=base_url('assets/img/retangule2.jpg')?>" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    		</div>
    	</div>

    	<hr class="featurette-divider">

    	<div class="row featurette">
    		<div class="col-md-7">
    			<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
    			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    		</div>
    		<div class="col-md-5">
    			<img  src="<?=base_url('assets/img/retangule3.jpg')?>" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    		</div>
    	</div>

    	<hr class="featurette-divider">

    	<!-- /END THE FEATURETTES -->

    </div><!-- /.container -->