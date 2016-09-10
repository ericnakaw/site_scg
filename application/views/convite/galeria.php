<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<br>
<br>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- Page Content -->
<div class="container">

	<!-- Page Header -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Galeria
				<small>Convites</small>
			</h1>
		</div>
	</div>
	<!-- /.row -->
	<div id="links">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<a href="<?=base_url('assets/img/casamento/carousel_400x300.jpg')?>" title="Banana" data-gallery>
						<img src="<?=base_url('assets/img/casamento/carousel_400x300.jpg')?>" alt="Banana">
					</a>
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<a href="<?=base_url('assets/img/casamento/default_400x300.jpg')?>" title="Apple" data-gallery>
						<img src="<?=base_url('assets/img/casamento/default_400x300.jpg')?>" alt="Apple">
					</a>
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<a href="<?=base_url('assets/img/casamento/up1000x750.jpg')?>" title="Orange" data-gallery>
						<img src="<?=base_url('assets/img/casamento/carousel_400x300.jpg')?>" alt="Orange">
					</a>
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fotos 
	<div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
			<a class="thumbnail" href="#">
				<img class="img-responsive" src="<?=base_url('assets/img/casamento/default_400x300.jpg')?>" alt="">
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
			<a class="thumbnail" href="#">
				<img class="img-responsive" src="<?=base_url('assets/img/casamento/default_400x300.jpg')?>" alt="">
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
			<a class="thumbnail" href="#">
				<img class="img-responsive" src="<?=base_url('assets/img/casamento/default_400x300.jpg')?>" alt="">
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
			<a class="thumbnail" href="#">
				<img class="img-responsive" src="<?=base_url('assets/img/casamento/default_400x300.jpg')?>" alt="">
			</a>
		</div>
	</div>
	/.Fotos -->

	<div id="blueimp-gallery" class="blueimp-gallery">
		<!-- The container for the modal slides -->
		<div class="slides"></div>
		<!-- Controls for the borderless lightbox -->
		<h3 class="title"></h3>
		<a class="prev">‹</a>
		<a class="next">›</a>
		<a class="close">×</a>
		<a class="play-pause"></a>
		<ol class="indicator"></ol>
		<!-- The modal dialog, which will be used to wrap the lightbox content -->
		<div class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" aria-hidden="true">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body next"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left prev">
							<i class="glyphicon glyphicon-chevron-left"></i>
							Previous
						</button>
						<button type="button" class="btn btn-primary next">
							Next
							<i class="glyphicon glyphicon-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	console.log("Teste1");
	$.ajax({
    // Flickr API is SSL only:
    // https://code.flickr.net/2014/04/30/flickr-api-going-ssl-only-on-june-27th-2014/
    url: 'http://localhost/site_scg/home/file/',
}).done(function (result) {
	var data = $.parseJSON(result);
	var linksContainer = $('#links');

	var arrDiv = [];
	$.each(data, function (index, value) {

		var div1 = $("<div></div>").prop("class", "col-sm-6 col-md-4");
		var div2 = $("<div></div>").prop("class","thumbnail");
		var a = $("<a></a>").prop("href", value.img).attr('data-gallery', '');
		var img = $("<img></img>").prop("src",value.img);
		var div3 = $("<div></div>").prop("class", "caption");
		var h3 = $("<h3></h3>").text(value.title);

		div3.append(h3);
		a.append(img);
		div2.append(a).append(h3);
		div1.append(div2);

		arrDiv[arrDiv.length] = div1;

		if(arrDiv.length == 3){
			var row = $("<div></div>").prop("class", "row");
			row.append(arrDiv);

			linksContainer.append(row);
			arrDiv = [];
		}

	})
}).fail(function(jqXHR, textStatus ) {
	alert( "error " +textStatus);
})

console.log("Teste2");
</script>