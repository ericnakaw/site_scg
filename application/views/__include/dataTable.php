<?php
//direcionamento para edição e exclusão, etc vindo do controller 
//?empty($dados['controller']) ? $controller = '' : $controller = $dados['controller']; 

$controller = $this->router->class;
?>
<link rel="stylesheet" href="<?= base_url("assets/css/dataTables.bootstrap.min.css"); ?>" />
<script type="text/javascript" src="<?= base_url("assets/js/jquery.dataTables.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("assets/js/dataTables.bootstrap.min.js"); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('table').dataTable({
            "language": {
                "url": "<?= base_url("assets/idioma/dataTable-pt.json") ?>"
            }
        });

        $('table tbody').on('click', 'tr', function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            }
            else {
                table.$('tr.active').removeClass('active');
                $(this).addClass('active');
            }
        });
        $('#reset_password').click(function () {
            if ($('table tbody tr.active td').eq(0).text() != '') {
                var id = $('table tbody tr.active td').eq(0).text();
                var nome = $('table tbody tr.active td').eq(1).text();
                if (confirm("A senha de: " + nome + " renovada!")) {
                    window.location.replace("<?= base_url("$controller/reset_password") ?>/" + id);
                }
            }
        });
        $('#deletar').click(function () {
            if ($('table tbody tr.active td').eq(0).text() != '') {
                var id = $('table tbody tr.active td').eq(0).text();
                var nome = $('table tbody tr.active td').eq(1).text();
                if (confirm("O item: " + nome + " sera apagado!")) {
                    window.location.replace("<?= base_url("$controller/deletar") ?>/" + id);
                }
            }
        });
        $('#editar').click(function () {
            if ($('table tbody tr.active td').eq(0).text() != '') {
                var id = $('table tbody tr.active td').eq(0).text();
                window.location.replace("<?= base_url("$controller/form") ?>/" + id);
            }
        });
    });
</script>
<style type="text/css">
    tr.active{
        font-weight: bolder;
    }
</style>