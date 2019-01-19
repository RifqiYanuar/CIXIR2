<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?= base_url()?>desain/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url()?>desain/style.css">

    <script type="text/javascript" src="<?= base_url()?>desain/js/jquery-3.2.1.js"></script>

    <script type="text/javascript" src="<?= base_url()?>desain/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    $this->load->view($konten); ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url();?>">
          <span class="glyphicon glyphicon-home"></span>Home</a></li>
          <li><a href="<?=base_url();?>index.php/user/data_diri">
          <span class="glyphicon glyphicon-user"></span>Data Diri</a></li>
      </ul>
    </div>
  </body>
</html>
