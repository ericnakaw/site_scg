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
                    <h1 class="page-header">Infantil
                        <small>Lembranças</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <!--INICIO: GALERIA-->

            <div id="links">
                <div class="row">
                    <?php foreach ($dados['portfolio'] as $key => $foto) {
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <!--<div class="w3-container w3-card-2 w3-padding w3-margin-bottom w3-margin-top">-->
                            <div class="w3-container w3-padding">
                                <a href="<?= base_url($foto->local) ?>" title="<?= $foto->titulo ?>" data-gallery>
                                    <img class="portfolio_img" src="<?= base_url($foto->local) ?>" alt="<?= $foto->alt ?>">
                                </a>
                                <div class="">
                                    <h3 class="hidden"><?= $foto->titulo ?></h3>
                                    <p class="hidden"><?= $foto->descricao ?></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <!--FIM: GALERIA-->

            <!-- PAGINATION -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <?php echo $dados['paginacao'] ?>
                    </ul>
                </div>
            </div>
            <!-- /PAGINATION -->

            <hr>

        </div>
    </div>
</div>
<?php $this->load->view('__include/blueimp-gallery') ?>