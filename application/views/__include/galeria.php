<!--INICIO: GALERIA-->
<div id="links">
    <div class="row">
        <?php foreach ($dados['portfolio'] as $key => $foto) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="w3-container w3-card-2 w3-padding w3-margin-bottom w3-margin-top">
                    <a href="<?=base_url($foto->local)?>" title="(#<?=$foto->id?>) <?=$foto->titulo?>" data-gallery>
                        <img class="portfolio_img" src="<?=base_url($foto->local)?>" alt="<?=$foto->alt?>">
                    </a>
                    <div class="">
                        <h3><?=$dados['cabecalho']?> (#<?=$foto->id?>)</h3><button type="button" class="btn btn-sm btn-default" title="<?=$foto->titulo?>" data-toggle="popover" data-placement="right" data-content="<?=$foto->descricao?>"><span class="glyphicon glyphicon-info-sign">Detalhes</span></button>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php
        } ?>
    </div>
</div>
<!--FIM: GALERIA-->