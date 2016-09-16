<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="margin-body-top">
	<div class="container">
		<div>
			<!-- Page Header -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Portifólio
						<small>Convite</small>
					</h1>
				</div>
			</div>
			<!-- /.row -->

			<!--INICIO: casamento/convite-->

			<div id="links">
				<div class="row">
					<?php foreach ($dados['portifolio'] as $key => $convite) {
						?>
						<div class="col-sm-6 col-md-4">
						<!--<div class="w3-container w3-card-2 w3-padding w3-margin-bottom w3-margin-top">-->
							<div class="w3-container w3-padding">
								<a href="<?=base_url($convite->local)?>" title="<?=$convite->titulo?>" data-gallery>
									<img class="portifolio_img" src="<?=base_url($convite->local)?>" alt="<?=$convite->alt?>">
								</a>
								<div class="">
									<h3 class="hidden"><?=$convite->titulo?></h3>
									<p class="hidden"><?=$convite->descricao?></p>
								</div>
							</div>
						</div>
						<?php
					} ?>
				</div>
			</div>
			<!--FIM: casamento/convite-->

			<hr>

			<!-- Pagination -->
			<div class="row text-center">
				<div class="col-lg-12">
					<ul class="pagination">
						<?php echo $dados['paginacao']?>
					</ul>
				</div>
			</div>
			<!-- /Pagination -->

			<hr>

		</div>
	</div>
</div>



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