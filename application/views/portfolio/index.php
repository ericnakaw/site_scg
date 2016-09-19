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
                    <a class="btn btn-success" href="<?= base_url('portfolio/form') ?>"><span class="glyphicon glyphicon-plus"></span></a>
                    <a id="editar" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a id="deletar" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span></a>
                    <a class="btn btn-info" href="<?=base_url('portfolio/form_multiples_inserts')?>">Formulário Multiplos Inserts</a>
                </div>
            </div>
            <hr>    
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table display compact table-bordered " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>IMG</td>
                                <td>Titulo</td>
                                <td>Descricao</td>
                                <td>Portfolio</td>
                                <td>Item</td>
                                <td>Alt</td>
                                <td>data_postagem</td>
                                <td>Local</td>
                            </tr>
                        </thead>
                        <tbody id="fbody">
                            <?php foreach ($dados['portfolio'] as $key => $portfolio) {
                                ?> 
                                <tr>
                                    <td><?=$portfolio->id?></td>
                                    <td class="thumbnail"><img style="width:100px;" src="<?=base_url($portfolio->local)?>"></td>
                                    <td><?=$portfolio->titulo?></td>
                                    <td><?=$portfolio->descricao?></td>
                                    <td><?=$portfolio->portfolio?></td>
                                    <td><?=$portfolio->item?></td>
                                    <td><?=$portfolio->alt?></td>
                                    <td><?=date("d/m/Y", strtotime($portfolio->data_postagem))?></td>
                                    <td><?=$portfolio->local?></td>
                                </tr>
                                <?php
                            }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
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