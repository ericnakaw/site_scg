<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
  <li data-target="#myCarousel" data-slide-to="3"></li>
</ol>
<div class="carousel-inner" role="listbox">
  <div class="item active">
   <img src="<?=base_url('assets/img/home/carousel/carousel5.jpg')?>" alt="First slide"/>
   <div class="container">
    <div class="carousel-caption hidden">
     <h1>Example headline.</h1>
     <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
     <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
   </div>
 </div>
</div>
<div class="item">
 <img src="<?=base_url('assets/img/home/carousel/carousel1.jpg')?>" alt="Second slide"/>
 <div class="container">
  <div class="carousel-caption hidden">
   <h1>Another example headline.</h1>
   <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
   <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
 </div>
</div>
</div>
<div class="item">
 <img src="<?=base_url('assets/img/home/carousel/carousel2.jpg')?>" alt="Third slide"/>
 <div class="container">
  <div class="carousel-caption hidden">
   <h1>One more for good measure.</h1>
   <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
   <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
 </div>
</div>
</div>
<div class="item">
 <img src="<?=base_url('assets/img/home/carousel/carousel3.jpg')?>" alt="Third slide"/>
 <div class="container">
  <div class="carousel-caption hidden">
   <h1>One more for good measure.</h1>
   <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
   <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
 </div>
</div>
</div>
<div class="item">
 <img src="<?=base_url('assets/img/home/carousel/carousel4.jpg')?>" alt="Third slide"/>
 <div class="container">
  <div class="carousel-caption hidden">
   <h1>One more for good measure.</h1>
   <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
   <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
 </div>
</div>
</div>
</div>
<div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <!-- INICIO : PRODUTOS -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
         <img class="img-rounded" src="<?=base_url('assets/img/circulo1.jpg')?>" alt="Generic placeholder image" width="300" height="300"/>
         <h2>Inspirações</h2>
         <p></p>
         <p><a class="btn btn-default" href="<?=base_url('inspiracoes')?>" role="button">Mais &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-4">
         <img class="img-rounded" src="<?=base_url('assets/img/circulo2.jpg')?>" alt="Generic placeholder image" width="300" height="300"/>
         <h2>Na mídia</h2>
         <p></p>
         <p><a class="btn btn-default" href="<?=base_url('midia')?>" role="button">Mais &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-4">
         <img class="img-rounded" src="<?=base_url('assets/img/circulo3.jpg')?>" alt="Generic placeholder image" width="300" height="300"/>
         <h2>Como comprar</h2>
         <p></p>
         <p><a class="btn btn-default" href="<?=base_url('comocomprar')?>" role="button">Mais &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
     </div>
     <!-- FIM : PRODUTOS -->
   </div>
   <!-- FIM : CONTAINER -->


   <!-- INICIO: FEATURETTES-->
   <div class="container marketing">
    <hr class="featurette-divider"/>
    <div class="row">
      <div class="featurette">
        <div class="col-md-7">
         <h2 class="featurette-heading">Parceiros <span class="text-muted"></span></h2>
         <p class="lead">Algumas pessoas se tornam especiais porque estão conosco no dia a dia, nos ajudam a suportam a rotina e dão aqueles conselhos certeiros. Essa pessoa é o seu parceiro, e é ótimo valorizar esse laço com as pessoas!</p>
       </div>
       <div class="col-md-5">
         <img src="<?=base_url('assets/img/home/featurettes/parceiros.jpg')?>" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image"/>
       </div>
     </div>
   </div>
   <hr class="featurette-divider"/>
   <div class="row">
     <div class="featurette">
      <div class="col-md-7 col-md-push-5">
       <h2 class="featurette-heading">Destaques<span class="text-muted"></span></h2>
       <p class="lead"> Um casamento feliz se constrói com muito amor, carinho e compreensão. Que estes sentimentos estejam sempre presentes na vida de vocês!</p>
     </div>
     <div class="col-md-5 col-md-pull-7">
       <img src="<?=base_url('assets/img/retangule2.jpg')?>" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image"/>
     </div>
   </div>
 </div>
 <hr class="featurette-divider"/>
</div>
   <!-- FIM : FEATURETTES -->