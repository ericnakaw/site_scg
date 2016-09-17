<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="panel panel-default margin-body-top">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $dados['titulo_painel']?></h3>
        </div>
        <div class="panel-body">
            <form method="post" action="#" class="form-horizontal" role="form" enctype="multipart/form-data" />

                <!--ID-->
                <?= form_hidden('id', '') ?>
                <!--titulo-->
                <div class="form-group">
                    <?= form_label('Titulo: ', 'titulo', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <input type="text" value="<?=$dados['portifolio']->titulo?>" name="titulo" id="titulo" class="form-control" placeholder="titulo"  required />
                    </div>
                </div>
                <!--descricao-->
                <div class="form-group">
                    <?= form_label('Descriçao: ', 'descricao', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="descricao"><?=$dados['portifolio']->descricao?></textarea>
                    </div>
                </div>
                <!--portifolio-->
                <div class="form-group">
                    <?= form_label('Portifólio: ', 'portifolio', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <select name="portifolio" class="form-control" id="portifolio" required>
                            <option value="" disabled>Selecione</option>
                            <option value="casamento">Casamento</option>
                            <option value="debutante">15 anos</option>
                            <option value="infantil">Infantil</option>
                            <option value="adulto">Adulto</option>
                            <option value="corporativo">Corporativo</option>
                        </select>
                    </div>
                </div>
                <!--item-->
                <div class="form-group">
                    <?= form_label('Item: ', 'item', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <select name="item" class="form-control" id="item" required>
                            <option value="" disabled>Selecione</option>
                            <option value="convite">Convite</option>
                            <option value="lembranca">Lembranca</option>
                            <option value="acessorio">Acessorio</option>
                        </select>
                    </div>
                </div>
                <!--alt-->
                <div class="form-group">
                    <?= form_label('Alt: ', 'alt', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <input type="text" value="<?=$dados['portifolio']->alt?>" name="alt" id="alt" class="form-control" placeholder="Alt do attributo da tag img"  required />
                    </div>
                </div>
                <!-- Imagem -->
                <div class="form-group">
                    <?= form_label('Imagem: ', 'Imagem', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-2">
                        <a href="#" class="thumbnail">
                            <img src="<?= base_url( $dados['portifolio']->local)?>" id="target" alt="">
                        </a>
                    </div>
                </div>
                <!--Arquivo-->
                <div class="form-group">
                    <?= form_label('Arquivo: ', 'local', array('class' => 'control-label col-sm-2')) ?>
                    <div class="col-sm-5">
                        <input type="file" name="local" id="local" size="20" onchange="putImage();" />
                    </div>
                </div>
                <!--Botoes-->
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-5">
                        <?= anchor(base_url('portifolio'), 'Cancelar', 'class="btn btn-default"') ?>
                        <?= form_submit('salvar', 'Salvar', 'class="btn btn-success"') ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
