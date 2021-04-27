<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>World View</title>
    <style>
        img{
            width: 200px;
            height: 200px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div id="container">
	<h1>Check the beautiful places</h1>

	<div id="body">
        <img src="<?php echo base_url('assets/images/bigben.jpg'); ?>" alt="bigben">
        <p>Bigben in London</p>
        <img src="<?php echo base_url('assets/images/bora.jpeg'); ?>" alt="bora">
        <p>Boracay in Philippines</p>
        <img src="<?php echo base_url('assets/images/sglion.jpg'); ?>" alt="merlion">
        <p>Merlion in Singapore</p>

       

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

<!-- <img src="../assets/images/places/img.png"> -->
<!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<link href="../assets/css/plugins/font-awesome.css" rel="stylesheet"> -->