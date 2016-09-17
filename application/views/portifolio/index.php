<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="panel panel-default margin-body-top">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $dados['titulo_painel'] ?></h3>
        </div>
        <div class="panel-body">
            <?php $this->load->view('__include/mensagem_crud'); ?>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-success" href="<?= base_url('portifolio/form') ?>"><span class="glyphicon glyphicon-plus"></span></a>
                    <a id="editar" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a id="deletar" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span></a>
                    <a class="btn btn-info" href="<?=base_url('portifolio/form_multi_insert')?>">Formulário Multi Inserts</a>
                </div>
            </div>
            <hr>    
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table display compact table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <td class="hidden">Id</td>
                                <td>#</td>
                                <td>Titulo</td>
                                <td>Descricao</td>
                                <td>Portifolio</td>
                                <td>Item</td>
                                <td>Alt</td>
                                <td>Local</td>
                            </tr>
                        </thead>
                        <tbody id="fbody">
                            <?php foreach ($dados['portifolio'] as $key => $portifolio) {
                                ?> 
                                <tr>
                                    <td class="hidden"><?=$portifolio->id?></td>
                                    <td><?=$key + 1?></td>
                                    <td><?=$portifolio->titulo?></td>
                                    <td><?=$portifolio->descricao?></td>
                                    <td><?=$portifolio->portifolio?></td>
                                    <td><?=$portifolio->item?></td>
                                    <td><?=$portifolio->alt?></td>
                                    <td><?=$portifolio->local?></td>
                                </tr>
                                <?php
                            }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <ul class="pager" id="">
                                        <?php (!empty($paginacao)) ? print $paginacao : ''; ?>
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('__include/dataTable'); ?>