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

	
	<script type="text/javascript" src="js/jquery.plugin.js"></script> 
	<script type="text/javascript" src="js/jquery.imagecube.js"></script>
	<script>
	$('#defaultCube').imagecube(); 
		 
		$('#stopCube').toggle(function() { 
				$(this).text('Start'); 
				$('#defaultCube').imagecube('stop'); 
			}, function() { 
				$(this).text('Stop'); 
				$('#defaultCube').imagecube('start'); 
			} 
		); 
		 
		$('#removeCube').toggle(function() { 
				$(this).text('Re-attach'); 
				$('#defaultCube').imagecube('destroy'); 
			}, 
			function() { 
				$(this).text('Remove'); 
				$('#defaultCube').imagecube(); 
			} 
		);
  </script>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<style>
h1, h2, h3, h4, h5, ul, li, p
{
	font-family: 'Lora', serif;
}

body
{
	color: #333;
}
</style>

	<title>J&amp;J Flooring - Flood Restoration</title>
</head>

<body>
<?php include('php/navbar.php'); ?>

<div class="container">
	<h1>Flood Restoration</h1>
	<div class="container" style="background-color:bisque;">
			<div class="text-left" style="padding: 40px;">
			<p>
				Water, believe it or not, can be detrimental to your floors.
				Natural disasters such as floods can cause mold and mildew to grow 
				into your floors, among other terrible things. This can often be 
				prevented with immediate restoration, whether it may be padding 
				replacement, water extraction or flooring replacement, provided 
	 			for you by J&J Flooring and often covered by your insurance. Here 
				at J&J Flooring, we understand that it’s nearly impossible to tell 
				when disaster is going to strike.
			</p>
			<p class="text-left text-danger">For your convenience and at no extra cost,
				we have <u><a href="contact_us.php">an emergency hotline</a></u> you can call for immediate services.</p>
			</div>
		<div class="container" style="margin-left:25%; padding-bottom:20px;">
			<div id="defaultCube" style="width: 50%; height: 50%;"> 
				<img src="img/flood-restoration-1.jpg" alt="Floor 1"/> 
				<img src="img/flood-restoration-2.jpg" alt="Floor 2"/> 
			</div>
		</div>
	
</div>


<?php include ('php/footer.php'); ?>
<script>
$("#defaultCube").imagecube();
$("#defaultCube").imagecube({speed: 1000});
</script>
</body>