<!DOCTYPE html>
<html>
<head>
	<title>www.balozikijana_registration</title>
   <script src="<?php echo base_url(); ?> cssframework/4/compjquery-3.5.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('cssframework/4/w3.css'); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('cssframework/frameworks/font-awesome/css/font-awesome.min.css'); ?>">
</head>
<body class="" style="background: #587e76;">
	<header class="w3-top" style="background:  #034f84;">
		<div class="w3-col l12">
		<h1 class="w3-center">
			<img src="<?php echo base_url().'cssframework/images/balozi.jpg' ?>" width="140" class="w3-left w3-circle">
			<b><big class="fa w3-jumbo w3-text-white">Balozikijana Foundation </big></b>
			<p class="w3-small"><h5 class="w3-center w3-text-white">
				<i>Rescue young Girls against sexual and gender harassment</i>
			</h5></p>
		<nav class="w3-right w3-margin-right">
			<a href="<?php echo base_url(); ?>home/balozikijana" class="w3-button w3-cyan w3-round-large fa"><b>Home</b></a>
		</nav>
		</h1>
	    </div>
	</header>
    <div class="w3-row" style="margin-top: 170px;">
    <div class="w3-col l12">
    	<h1 class="w3-text-white w3-xxxlarge w3-center"><b class="fa">
    	Login your account here</b></h1>
    	<center>
    		<?php echo '<div class="w3-row w3-round-large w3-card-4 w3-cyan" style="width:900px;">';
    		 require 'logform.php';
    		 echo'</div><p></p><br>'; ?>
    	
    	</center>
    </div>
    </div>
</body>
</html>