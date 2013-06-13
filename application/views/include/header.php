<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>CodeIgniter Bootstrap</title>

   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">

   <script src="<?= base_url('assets/js/jquery.min.1.9.1.js') ?>"></script>
   <script src="<?= base_url('assets/js/jquery-ui.min.1.10.3.js') ?>"></script>
   <script src="<?= base_url('assets/js/lodash.min.1.2.1.js') ?>"></script>
   <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</head>
<body>
   <div class="container">
      <div class="subnav" style="margin-bottom: 10px;">
            <ul class="nav nav-pills">
               <li <? if(is_active()): ?>class="active"<? endif; ?>><a href="<?= base_url() ?>">Esporte Coletivo</a></li>
               <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown">Opções <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="">Eventos</a></li>
                  <li><a href="">Campos</a></li>
                  <li><a href="">Fale Conosco</a></li>
                  <li><a href="">Parceiros</a></li>
               </ul>
               </li> 
            <ul class="nav nav-pills pull-right">
               <li><a href="<?= base_url() ?>esporte/acessar" class="btn btn-success">Acessar</a></li>
               </ul>
            </ul>
      </div>