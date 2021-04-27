<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Awesome Ninjas</title>
	<style>
		img{
			width: 400px;
			height: 400px;
			display: inline-block;
		}
		p{
			font-family: 'Helvetica';
			font-size: 30px;
			margin-Left: 20px;
		}
	</style>
</head>
<body>

<div id="container">
	<h1>Awesome ninjas</h1>

	<div id="body">
		<img src="<?php echo base_url('assets/images/ninja1.jpeg'); ?>" alt="n1">
		<p>Michiko Amagi</p>
		<img src="<?php echo base_url('assets/images/ninja2.jpeg'); ?>" alt="n2">
		<p>Hayabusa Rei</p>
		<img src="<?php echo base_url('assets/images/ninja3.jpeg'); ?>" alt="n3">
		<p>Makito Jima</p>
		<img src="<?php echo base_url('assets/images/ninja4.jpeg'); ?>" alt="n4">
        <p>Tamiji Iijisa</p>
        <img src="<?php echo base_url('assets/images/ninja5.jpg'); ?>" alt="n5">
        <p>Sakuri Nemoda</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

<!-- <img src="../assets/images/places/img.png"> -->
<!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="../assets/css/plugins/font-awesome.css" rel="stylesheet"> -->