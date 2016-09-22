<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>{titulo}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('assets/img/ico/scg2.ico') ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?= base_url('assets/img/ico/scg2.ico') ?>" type="image/x-icon" />
	{header}
</head>
<body>
	{menu}
	<?php 
	$controller = array("home", "sobre", "contato", "localizacao","inspiracoes","midia","comocomprar");

	if(!in_array($this->router->class, $controller)){
		?>
		<div id="breadcrumb" class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					{breadcrumb}
				</div>
			</div>
		</div>
		<style type="text/css" media="screen">
			.margin-body-top{
				margin-top: 0px !important;
			}
		</style>
		<?php
	}
	?>
	{conteudo}
	<div class="container">
		<div class="row">
			{footer} 
		</div>       
	</div>       
</body>
</html>
