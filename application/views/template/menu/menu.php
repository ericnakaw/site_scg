<div class="navbar-wrapper">
    <div class="container">
        <nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?=anchor('home', 'Camila Golin', array('class'=>"navbar-brand",'style'=>"font-size: x-large;font-weight: bold;"));?>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-menubuilder"">
                    <ul class="nav navbar-nav navbar-left">
                        <li><?=anchor('sobre', 'Sobre nós');?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfólio <span class="caret"></span></a>
                            <ul id="dropdown_portfolio" class="dropdown-menu" style="font-size: large;">
                                <li><?=anchor('casamento', 'Casamento');?></li>
                                <li><?=anchor('debutante', '15 anos');?></li>
                                <li><?=anchor('infantil', 'Infantil');?></li>
                                <li><?=anchor('adulto', 'Adulto');?></li>
                                <li><?=anchor('corporativo', 'Corporativo');?></li>
                            </ul>
                        </li>
                        <li><?=anchor('contato', 'Contato');?></li>
                        <li><?=anchor('localizacao', 'Localização');?></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>