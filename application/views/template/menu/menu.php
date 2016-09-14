<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--?=anchor('home', 'Studio Camila Golin', array('class'=>"navbar-brand"));?-->
                    <a href="<?=base_url('')?>"><img src="<?=base_url('assets/img/home/logo/logo_home.png')?>" alt="First slide"/></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><?=anchor('sobre', 'Sobre nós');?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfólio <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?=anchor('convite', 'Convites');?></li>
                                <li><?=anchor('acessorio', 'Acessórios');?></li>
                                <li><?=anchor('lembranca', 'Lembranças');?></li>
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