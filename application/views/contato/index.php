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
                        <?php echo form_open('contato/email', array('id'=>'form_contato','method'=>'POST','role'=>'form'),''); ?>
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="form-group has-feedback">
                                <?php 
                                echo form_label('*Nome Completo:', 'nome', '');
                                echo form_input(array('name' => 'nome','id'=>'nome','placeholder'=>'Nome Completo','autofocus'=>'autofocus','required'=>'required'), set_value('nome'), 'class="form-control"');
                                ?>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group has-feedback">
                                <?php 
                                echo form_label('*Email:', 'email', '');
                                echo form_input(array('type' => 'email','name' => 'email','id'=>'email','placeholder'=>'Email','required'=>'required'), set_value('email'), 'class="form-control"');
                                ?>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <?php 
                                echo form_label('Telefone:', 'telefone', '');
                                echo form_input(array('type' => 'text','name' => 'telefone','id'=>'telefone','placeholder'=>'Telefone'), set_value('telefone'), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group has-feedback">
                                <?php echo form_label('*Evento:', 'evento', ''); 
                                $options = array(
                                    ''=>'Selecione o seu evento',
                                    'Casamento'=>'Casamento',
                                    'Debutante'=>'Debutante',
                                    'Aniversario'=>'Aniversario',
                                    'Infantil'=>'Infantil',
                                    'Corporativo'=>'Corporativo',
                                    'Outros'=>'Outros',
                                    );
                                echo form_dropdown(array('name'=>'evento','class'=>'form-control','id'=>'evento','required'=>'required'), $options, 'default');
                                ?>
                                <span class="form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <?php 
                                echo form_label('Data do evento:', 'data', '');
                                echo form_input(array('type' => 'date','name' => 'data','id'=>'data','placeholder'=>'Data do evento'), set_value('data'), Array('class'=>'form-control'));
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <?php echo form_label('*Mensagem:', 'mensagem', '');
                                echo form_textarea(array('name'=>'mensagem','class'=>'form-control','rows'=>'3','id'=>'mensagem','required'=>'required'), set_value('mensagem'));
                                ?>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
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
                                <strong>Oops ocorreu um erro!</strong><br>
                                Envie um email para info@camilagolin.com.br
                            </div>
                        </div>
                        <div id="return_form_validacao" class="col-xs-8 col-md-8 col-lg-8" style="display: none">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Oops erro na validação!</strong><br>
                                <div id="validation_message"></div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-md-4 col-lg-4 pull-right">
                            <?php echo form_submit(array('name' => 'enviar','id'=>'btnSubmit'), 'Enviar', 'class = "btn btn-custom pull-right btn-block"');?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <footer class="w3-container">
                      <h5></h5>
                  </footer>
              </div>
          </div>
          <div class="col-xs-12 col-md-6 col-md-6 text-lg">
            <h3>Loja Tatuapé</h3>
            Atendimento:<br>
            Seg a Sex das 09h00 às 17h30<br>
            Sábados das 10h00 às 13h00 com hora marcada.<br>
            Rua Emilio Mallet, 1541 – Tatuapé<br>
            Tel: (11) 3596-9420 / (11) 2076-1035<br>
            vendas@camilagolin.com.br<br>
            <hr>
            <h3>Loja Jardins</h3>
            Atendimento <b>somente</b> com hora marcada.<br>
            Ter a Sex  das 11h00 às 18h00 <br>
            Sábados das 10h00 às 13h00<br>
            Rua Haddock Lobo, 131 sl. 303 – Cerqueira César<br>
            (Estacionamento 1ª hora cortesia com vallet)<br>
            Tel: (11) 3596-9430<br>
            vendas2@camilagolin.com.br<br>
            <hr>
        </div>
    </div>
</div>
<hr>
</div>
</div>
<style type="text/css">
    .input:focus {
        outline: none !important;
        border:1px solid red;
        box-shadow: 0 0 10px #719ECE;
    }
</style>
<script>
    $(document).ready(function () {
        $("#form_contato").on("submit", function (event) {
            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data: $(this).serialize(),
                dataType:'json',
                beforeSend: function(jqXHR,settings){
                    $(".form-group").removeClass('has-error');
                    $(".form-group").removeClass('has-success');
                    $(".form-control-feedback").removeClass('glyphicon glyphicon-remove');
                    $(".form-control-feedback").removeClass('glyphicon glyphicon-ok');

                    $("#btnSubmit").prop('disabled', true);
                },
                complete:function(jqXHR,settings){
                    $("#btnSubmit").prop('disabled', false);
                },
                success: function (data)
                {
                    console.log(data);
                    if(data.status =='error_validation'){
                        document.getElementById("validation_message").innerHTML = "";
                        $.each(data.msg,function( index, element ) {
                            if(element != ""){
                                $("#"+index).parent().addClass("has-error");
                                $($("#"+index).parent().children()[2]).addClass('glyphicon glyphicon-remove');
                            }else{
                                $("#"+index).parent().addClass("has-success");
                                $($("#"+index).parent().children()[2]).addClass('glyphicon glyphicon-ok');
                            }
                            document.getElementById("validation_message").innerHTML += data.msg[index];
                        });
                        $('#return_form_validacao').slideDown();
                    }
                    else if (data.status =='success') {
                        $('#return_form_validacao').hide();
                        $('#return_form_success').slideDown();

                        $("#form_contato")[0].reset();
                    } else {
                        $('#return_form_error').slideDown();
                    }
                },
                error: function (jqXHR, textStatus, errorMessage) {
                    $('#return_form_error').slideDown();
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