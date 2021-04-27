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
	if(is_numeric($up)){
		for($i=0; $i<$up; $i++){
			echo $whats.'<br>';
		}
	} else {
		echo "Sorry this url does not meet our requirements";
	}
	?>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

	



</body>
</html>
