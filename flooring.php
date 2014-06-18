<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeremy Ber">
	<!--Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!--JS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>

	<!--Favicon-->
	<link rel="icon" type="image/ico" href="img/favicon.ico">


	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<!--FancyBox -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" href="css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
	<link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>

	<title>J&amp;J Flooring - Flooring Services</title>
</head>
<style>
h1, h2, h3, h4, h5, ul, li, p
{
	font-family: 'Lora', serif;
}

body
{
	color: #333;
}
.sofancy
{
	 display: inline-block;
    margin-left: auto;
    margin-right: auto;
	margin-top:5%;
}
</style>
<body>
<?php include('php/navbar.php'); ?>

<div class="container">
	<h1><div class="background_text">Flooring</h1>
	<div class="container" style="background-color:bisque;">
		<div class="row">
		<div style="text-align:left;" class="col-md-8">
			<h3 style="text-align:center;">Our Promise</h3>
			<p>	
				Whether your kids or pets have ravaged your 
				new carpeting or you’re tired of your outdated floors, 
				J&J Flooring has every service for you.
			</p>
			<p>
				We install near everything from hardwood, tile 
				and carpeting as well as clean out those pesky spots 
				from your carpets. Sick of that finish on your hardwood? 
				We can help by refinishing your floors to fit your needs
			</p>
			<p>
				Again, all estimates are free. <a href="contact_us.php">Call us</a> to talk to someone 
				about some options you have or a Pinterest idea you might 
				have in mind. 
			</p>
		</div>
		<div class="container">
			<a class="fancybox" rel="group" href="img/flooring-1-big.jpg"><img class="img-responsive sofancy" src="img/flooring-1.jpg" alt=""/></a>
		</div>
		<br><br><br><br>
	</div>
	
</div>


<?php include ('php/footer.php'); ?>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</body>