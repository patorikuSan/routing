<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Awesome Ninjas</title>
	<style>
		.wrapper{
			width: 970px;
		}
		img{
			width: 200px;
			height: 200px;
			display: inline-block;
		}
		p{
			font-family: 'Helvetica';
			font-size: 15px;
			margin-Left: 20px;
				
		}
	</style>
</head>
<body>

<div id="wrapper">
	<h1>How many ninjas do you want?</h1>
	<?= "Number of NINJAS : ".$num."<br/>" ?>
	<div id="body">
	<?php for($i = 0; $i < $num; $i++) {?>
		<img src="<?php echo base_url('assets/images/ninja1.jpeg'); ?>" alt="n1">
		<!-- <p>Michiko Amagi</p> -->
	<?php }?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

<!-- <img src="../assets/images/places/img.png"> -->
<!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="../assets/css/plugins/font-awesome.css" rel="stylesheet"> -->