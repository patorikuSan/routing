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
			font-size: 15px;
			margin-Left: 20px;
				
		}
	</style>
</head>
	<body>
	<div id="wrapper">
<?php 
		$counter = $this->session->userdata('counter');
		if($this->session->userdata('counter'))
		{
			echo "You have visited this page $counter times";
		} else {
			echo 0;
		}
		?>
		<form action="<?php echo base_url('users/reset'); ?>" method="post">
		
		<input type="submit" value="reset">
		</form>
	
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

	



</body>
</html>
