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
                    <h1 class="page-header"><?= $dados['galeria'] ?>
                        <small><?= $dados['cabecalho'] ?></small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!--INICIO: GALERIA-->
            <?php $this->load->view('__include/galeria') ?>
            <!--FIM: GALERIA-->

            <!-- Pagination -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <?php echo $dados['paginacao'] ?>
                    </ul>
                </div>
            </div>
            <!-- /Pagination -->

            <hr>

        </div>
    </div>
</div>
<?php $this->load->view('__include/blueimp-gallery') ?>