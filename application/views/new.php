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
			<form action="<?= base_url('/users/create'); ?>" method="post">
				First name<input type="text" name="first_name">
				Last name <input type="text" name="last_name">
				Email <input type="text" name="email">
				<input type="submit" value="submit">
			</form>
	</body>
</html>

<!-- <img src="../assets/images/places/img.png"> -->
<!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="../assets/css/plugins/font-awesome.css" rel="stylesheet"> -->