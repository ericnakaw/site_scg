<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container">
    <div class="margin-body-top">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contato
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-6">
                <div class="w3-card-4">
                    <header class="w3-container">
                    <h2>Solicite um orçamento</h2>
                    </header>
                    <div class="w3-container">
                        <form id="form_contato" action="<?= base_url("index.php/ajax/form_contato") ?>" method="POST" role="form">

                            <div class="form-group col-xs-12 col-md-12 col-lg-12">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" autofocus required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 col-lg-6">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 col-lg-6">
                                <label for="telefone">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 col-lg-6">
                                <label for="evento">Evento:</label>
                                <select name="evento" id="evento" class="form-control" required>
                                    <option value="" disabled selected>Selecione o seu evento</option>
                                    <option value="casamento">Casamento</option>
                                    <option value="debutante">15 anos</option>
                                    <option value="aniversario">Aniversário</option>
                                    <option value="cha">Chá</option>
                                    <option value="corporativo">Corporativo</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 col-lg-6">
                                <label for="data">Data do evento:</label>
                                <input type="date" name="data" id="data" class="form-control" value="" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-12 col-lg-12">
                                <label for="mensagem">Mensagem:</label>
                                <textarea name="mensagem" id="mensagem" class="form-control" rows="3"></textarea>
                            </div>
                            <div id="return_form_success" class="col-xs-8 col-md-8 col-lg-8" style="display: none">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Solicitação enviada!</strong><br>
                                    Entraremos em contato em breve.
                                </div>
                            </div>
                            <div id="return_form_error" class="col-xs-8 col-md-8 col-lg-8" style="display: none">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Oops correu um erro!</strong><br>
                                    Envie um email para info@camilagolin.com.br
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 col-lg-4 pull-right">
                                <button type="submit" class="btn btn-primary pull-right btn-block">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <footer class="w3-container">
                      <h5></h5>
                  </footer>
              </div>
          </div>
          <div class="col-xs-12 col-md-6 col-md-6">
            <h3>Loja Tatuapé</h3>
            Atendimento de Seg a Sex das 09h00 as 17h30<br>
            Sábados das 10h00 às 13h00 com hora marcada.<br>
            Rua Emilio Mallet, 1541 – Tatuapé<br>
            Tel: (11) 3596-9420/ (11) 2076-1035<br>
            vendas@camilagolin.com.br<br>
            <hr>
            <h3>Loja Jardins</h3>
            Atendimento Quarta a Sábado somente com hora marcada.<br>
            Rua Haddock Lobo, 131 sl. 303 – Cerqueira César<br>
            (Estacionamento cortesia com vallet)<br>
            Tel: (11) 3596-9430<br>
            vendas2@camilagolin.com.br<br>
            <hr>
        </div>
    </div>
</div>
<hr>
</div>
</div>
<script>
    $(document).ready(function () {
        $("#form_contato").on("submit", function (event) {
            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function (result)
                {
                    if (!!result) {
                        console.log(result);
                        $('#return_form_success').slideDown();
                    } else {
                        console.log(result);
                        $('#return_form_error').slideDown();
                    }
                },
                error: function (jqXHR, textStatus, errorMessage) {
                    $('#return_form_error').slideDown();
                    console.log(errorMessage);
                }
            });
            event.preventDefault();
        });
    });
</script>
<br>
<br>
<br>
<br>