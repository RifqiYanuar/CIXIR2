<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
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
	<div class="badan">
			<h1>Welcome to Blue Island !!!</h1><br><br>
			<img src="<?=base_url()?>asset/w.png" />
			<h3 style="margin-top:75.5px;">-- Piace And Respect --</h3>
	</div>
</div>
</body>
</html>
