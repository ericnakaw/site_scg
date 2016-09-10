<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<br>
<br>
<!-- Page Content -->
<div class="container">
	<div>
		<!-- Page Header -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Contato
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-6">
				<form action="" method="POST" role="form">
					<fieldset>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<legend>Solicite um orçamento</legend>
						</div>

						<div class="form-group col-xs-12 col-md-12 col-lg-12">
							<label for="nome">Nome:</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" autofocus required>
						</div>
						<div class="form-group col-xs-12 col-md-6 col-lg-6">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group col-xs-12 col-md-6 col-lg-6">
							<label for="telefone">Telefone:</label>
							<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
						</div>
						<div class="form-group col-xs-12 col-md-6 col-lg-6">
							<label for="evento">Evento:</label>
							<select name="evento" id="evento" class="form-control" required>
								<option value="" disabled selected>Selecione o seu evento</option>
								<option value="casamento">Casamento</option>
								<option value="debutante">15 anos</option>
								<option value="aniversario">Aniversário</option>
								<option value="cha">Chá</option>
								<option value="corporativo">Corporativo</option>
								<option value="outros">Outros</option>
							</select>
						</div>
						<div class="form-group col-xs-12 col-md-6 col-lg-6">
							<label for="data">Data do evento:</label>
							<input type="date" name="data" id="data" class="form-control" value="" required>
						</div>
						<div class="form-group col-xs-12 col-md-12 col-lg-12">
							<label for="mensagem">Mensagem:</label>
							<textarea name="mensagem" id="mensagem" class="form-control" rows="3"></textarea>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<button type="submit" class="btn btn-primary pull-right">Enviar</button>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="col-xs-12 col-md-6 col-md-6">
				
				<div class="w3-panel w3-light-grey w3-topbar w3-bottombar w3-border-grey">
					<h3>Tatuapé</h3>
					<p>Email: info@camilagolin.com.br</p>
					<p>Tel: (11) 2076-1035/ (11)3596-9420</p>
					<p>Endereço: R. Emílio Mallet, 1541 - Tatuapé, São Paulo - SP, 03320-001</p>
					<p>Atendimento: Seg-Sex 9:00 às 18:00 / Sábados 10:00 às 13:00</p>
				</div>
				<div class="w3-panel w3-pale-sand w3-topbar w3-bottombar w3-border-sand">
					<h3>Modelo 2</h3>
					<p>Email: info@camilagolin.com.br</p>
					<p>Tel: (11) 2076-1035/ (11)3596-9420</p>
					<p>Endereço: R. Emílio Mallet, 1541 - Tatuapé, São Paulo - SP, 03320-001</p>
					<p>Atendimento: Seg-Sex 9:00 às 18:00 / Sábados 10:00 às 13:00</p>
				</div>
				<blockquote>
					<h3>Modelo 3</h3>
					<p>Email: info@camilagolin.com.br</p>
					<p>Tel: (11) 2076-1035/ (11)3596-9420</p>
					<p>Endereço: R. Emílio Mallet, 1541 - Tatuapé, São Paulo - SP, 03320-001</p>
					<p>Atendimento: Seg-Sex 9:00 às 18:00 / Sábados 10:00 às 13:00</p>
				</blockquote>

			</div>

		</div>

		<hr>
	</div>

</div>
<br>
<br>
<br>
<br>