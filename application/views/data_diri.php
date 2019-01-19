<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style media="screen">
		body {
			background-image: url("<?=base_url()?>asset/q.jpg");
      background-size: cover;
		}
	</style>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">SLENGE'AN NGODING</h1>
		<h3 class="deskripsi">P.L.U.R Web Desain</h3>
	</header>
	<div class="menu">
		<ul>
      <li><a href="<?=base_url()?>index.php/welcome/homepage"> Home </a></li>
			<li><a href="<?=base_url()?>index.php/welcome/tentang"> About </a></li>
			<li><a href="<?=base_url()?>index.php/welcome/tutorial"> Tutorial </a></li>
		</ul>
	</div>
	<div class="badan" style="text-align:left;">
    <img style="width: 790px;float: right;"src="<?=base_url()?>asset/ft.png" alt="">
    <div id="isi" style="margin-left:100px;">
      <h1 style="margin-top:50px;margin-bottom:5px;">Rifqi Yanuar Almuzaki</h1>
      <p>Software Engineer & UI/UX Expert</p><br><br>
      <img style="width: 30px;float:left;margin:5px;margin-top:10px;"src="<?=base_url()?>asset/mail.png" alt="">
      <p>rifqi_yanuar_26rpl@student.smktelkom-mlg.sch.id</p>
      <img style="width: 30px;float:left;margin-top:20px;margin-right:5px;margin-left:5px;"src="<?=base_url()?>asset/telp.png" alt="">
      <br><p>+6281230111967</p><br>
      <img style="width: 30px;;float:left;margin:5px;"src="<?=base_url()?>asset/location.png" alt="">
      <p>Malang - Indonesia</p>
    </div>
			<h3 style="margin-top:203px; margin-left: 400px;">-- Piace And Respect --</h3>
	</div>
</div>
</body>
</html>
