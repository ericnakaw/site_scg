<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="margin-body-top">
    <div class="container">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Portifólio
                    <small>Corporativo</small>
                </h1>
            </div>
        </div>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="<?= base_url('corporativo/convite') ?>">
                    <!-- 700x400 -->
                    <img class="img-responsive" src="<?= base_url('assets/img/carousel6_700x400.jpg') ?>" alt="">
                </a>
                <h3>
                    <a href="<?= base_url('corporativo/convite') ?>">Convite</a>
                </h3>
                <p></p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="<?= base_url('corporativo/lembranca') ?>">
                    <!-- 700x400 -->
                    <img class="img-responsive" src="<?= base_url('assets/img/convite_especial_700x400.jpg') ?>" alt="">
                </a>
                <h3>
                    <a href="#">Lembrança</a>
                </h3>
                <p></p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="<?= base_url('corporativo/acessorio') ?>">
                    <!-- 700x400 -->
                    <img class="img-responsive" src="<?= base_url('assets/img/15anos_700x400.jpg') ?>" alt="">
                </a>
                <h3>
                    <a href="#">Acessórios</a>
                </h3>
                <p></p>
            </div>
        </div>
        <!-- /.Projects Row -->
        <hr>	
    </div>
</div>