<?php


/* USER-AGENTS
================================================== */
function check_user_agent ( $type = NULL ) {
        $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
        if ( $type == 'bot' ) {
                // matches popular bots
                if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
                        return true;
                        // watchmouse|pingdom\.com are "uptime services"
                }
        } else if ( $type == 'browser' ) {
                // matches core browser types
                if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
                        return true;
                }
        } else if ( $type == 'mobile' ) {
                // matches popular mobile devices that have small screens and/or touch inputs
                // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
                // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
                if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                        // these are the most common
                        return true;
                } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                        // these are less common, and might not be worth checking
                        return true;
                }
        }
        return false;
}

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeremy Ber">
	<meta name="format-detection" content="telephone=no" />
	<!--Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!--JS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>

	<!--Favicon-->
	<link rel="icon" type="image/ico" href="img/favicon.ico">


	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>


	<title>J&amp;J Flooring - Contact Us</title>
</head>
<style>
h1, h2, h3, h4, h5, ul, li, p, nav
{
	font-family: 'Lora', serif;
}

body
{
	color: #333;
}
</style>
<body>
<?php include('php/navbar.php'); ?>
<div class="row">
<div class="container-fluid">
	<h1><span class="glyphicon glyphicon-earphone"></span><div class="background_text"> Contact Us</div></h1>
	<div class="container" style="text-align:left; background-color:bisque;">
	<h3>Schedule Your Appointments Now!</h3>

	<ul>
		<li>
			<h4>Office Hours:</h4>
			<p style="text-indent:15px;">Mon - Fri</p>
			<p style="text-indent:15px;">Sat - Sun</p> 
		<li>Office Phone:  
			<?php 
				$ismobile = check_user_agent('mobile');
				if($ismobile)
				{?>
					<a href="tel://1-708-636-2100">(708) 636-2100</a> 
					, <a href="tel://1-708-229-2250">(708) 229-2250</a></li>
			  <?}
				else
				{?>
					(708) 636-2100, (708) 229-2250</li>
				<?}?>
			
		<li>
			<h4>Email: <a href="mailto:Jay@jjflooringpros.com" target="_blank">Jay@jjflooringpros.com</a></h4>
		</li>
			<p class="lead text-danger"><u>Emergency: 
		<?php 
				$ismobile = check_user_agent('mobile');
				if($ismobile)
				{?>
					<a href="tel://1-708-268-6947">(708) 268-6947</a></li>
			  <?}
				else
				{?>
					(708) 268-6947</li>
				<?}?>
	</u></p>
	</ul>
	<p class="lead">Have any questions? Call or Email Jay now!</p>

	</div>
	</div>
</div>

<?php include ('php/footer.php'); ?>
</body>