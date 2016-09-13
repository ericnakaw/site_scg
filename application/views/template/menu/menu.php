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
                    <?=anchor('home', 'Studio Camila Golin', array('class'=>"navbar-brand"));?>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><?=anchor('home', 'Studio Camila Golin');?></li>
                        <li><?=anchor('sobre', 'Sobre');?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfólio <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?=anchor('convite', 'Convites');?></li>
                                <li><?=anchor('acessorio', 'Acessórios');?></li>
                                <li><?=anchor('lembranca', 'Lembranças');?></li>
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
<style>
    .cover {
        object-fit: cover;
    }
</style>