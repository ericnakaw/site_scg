<!--MENSAGENS IDE SUCESSO OU ERRO NAS PAGINAS DE CRUD-->
<script>
    $(document).ready(function () {
        $("#msg").fadeOut(5000);
    });
</script>
<?php
if ($this->session->flashdata()) {
    if ($this->session->flashdata('sucesso')) {
        $classe = 'success';
        $strong = 'Successo!';
        $msg = $this->session->flashdata('sucesso');
    } else {
        $classe = 'danger';
        $strong = 'Erro!';
        $msg = $this->session->flashdata('erro');
    }
    ?>
    <div id="msg" class="alert alert-<?= $classe ?> fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?= $strong ?></strong> <?= $msg ?>
    </div>
    <?php
}
?>