<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ($dados['acao'] == 'inserir') {
    $action = 'crud/inserir';
    $id = '';
    $dados['crud'] = new crud_m();
} elseif ($dados['acao'] == 'editar') {
    $action = 'crud/editar';
}
?>
<div class="container">
    <div class="panel panel-default margin-body-top">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $dados['titulo_painel']?></h3>
        </div>
        <div class="panel-body">
        <form method="post" action="<?=base_url($action)?>" class="form-horizontal" role="form" enctype="multipart/form-data" />

                <!--ID-->
                <?= form_hidden('id', $dados['crud']->id) ?>

                <!--Nome-->
                <div class="form-group">
                    <?= form_label('local: ', 'local', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <input type="file" name="local" size="20" />
                    </div>
                </div>
                <!--Botoes-->
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-5">
                        <?= anchor(base_url('crud'), 'Cancelar', 'class="btn btn-default"') ?>
                        <?= form_submit('salvar', 'Salvar', 'class="btn btn-success"') ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
