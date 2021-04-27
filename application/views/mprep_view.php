<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Users</title>
	<style>
		.wrapper{
			width: 970px;

		}
		img{
			width: 200px;
			height: 200px;
			display: inline-block;
		}
		h1{
			font-family: 'Helvetica';
			margin-Left: 20px;
		}		
		h2{
			font-family: 'Helvetica';
			font-size: 15px;
			margin-Left: 20px;
				
		}
		h3, ul, li{
			font-family: 'Helvetica';
			font-size: 15px;
			margin-Left: 20px;
			color: green;
		}
	</style>
</head>
	<body>
	<div id="wrapper">

	<h1>User Name: <?= $name; ?></h1>
	<h2>User Age:<?= $age; ?>, Location: <?= $location; ?></h2>
	<h3>5 Hobbies</h3>
	<ul>
		<li><?= $hobbies[0]; ?></li>
		<li><?= $hobbies[1]; ?></li>
		<li><?= $hobbies[2]; ?></li>
		<li><?= $hobbies[3]; ?></li>
		<li><?= $hobbies[4]; ?></li>
	</ul>


		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

	



</body>
</html>
