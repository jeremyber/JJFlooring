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


	<title>J&amp;J Flooring - About Us</title>
</head>
<style>
h1, h2, h3, h4, h5, nav
{
	font-family: 'Lora', serif;
}

.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h2 { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
   
}

h2 span { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 10px; 
}

body
{
	color: bisque;
}
</style>
<body> 
<?php include('php/navbar.php'); ?>

<div class="container">
	<h1 style="color:lightseagreen;">About Us</h1>
	<div class="row text-center" style="background-color:black; padding:15px;">
		<div class="image">
			<img src="img/about_us-1.jpg" style="display:initial;" class="img-responsive img-rounded"></img>
			<h2><span>
				Founded in 1991 by young entrepreneur Jay Ahmad, 
				J&J Flooring has been providing flooring services of 
				all sorts for people all over the Chicagoland and Midwest 
				area.
				<br/>  J&J Flooring is family owned and operated 
				which allows us to treat all our clients like 
				members of the family. We take care of your flooring
				needs, personally and promptly while putting an emphasis 
				on making sure you are happy with your service(s). </span></h2>
		</div>	
	</div>
</div>


<?php include ('php/footer.php'); ?>
</body>