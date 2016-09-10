<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<br>
<br>
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
	<hr>
	<?php echo $dados['error'];?>

	<?php echo form_open_multipart('upload/do_upload');?>

	<input type="file" name="userfile" size="20" />

	<br /><br />

	<input type="submit" value="upload" />

</form>
</div>	