<!doctype html>

<head>
	<title>Arcadia Farmlet</title>
	<meta name="description" content="Arcadia Farmlet">
	<link rel="stylesheet" href="css/style.css">

	

</head>
<body>
<?php ; 
$filename="message";
$x= rand(0,10000000000000000); 
$filename .= $x;
$filename .= ".txt";

$myfile = fopen($filename, "w") or die("Unable to open file!");
$txt = $_GET["name"];
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
$txt = $_GET["email"];
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
$txt = $_GET["message"];
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
fclose($myfile);?>

	<section class="top_banner">
		<div class='top_banner_background'>
			<img class='object-fit_cover' src='images/top2.png' alt='green'>
		</div>
		<div class='overlay'>
			<img class='object-fit_cover' src='images/trans_green.png' alt='green'>
		</div>
		<div class="overlay">
			<img class='object-fit_contain' src="images/logo_no_bg.png" alt="Arcadia Farmlet">
		</div>
	</section>
	
	<section class="navbar">
		<div class='filler'></div><!-- This vertically centers the text -->
		<div class='navbar_item_holder'>
			<div class='navbar_item'><a href="index.html">Home</a></div>
			<div class='navbar_item'><a href="goats.html">Goats</a></div>
			<div class='navbar_item'><a href="ducks.html">Ducks</a></div>
			<div style='width:220px;' class='navbar_item'><a href="#">Milk&nbsp;&nbsp;and&nbsp;&nbsp;Eggs</a></div>
			<div class='navbar_item'><a style="color:green;" href="contact.html">Contact&nbsp;&nbsp;Us</a></div>
		</div>
	</section>

	<section class="content">
		<div class='content_title' style='margin-top:100px;margin-bottom:30px;text-transform:none;'>
			<p> Thank&nbsp;&nbsp;you&nbsp;&nbsp;for&nbsp;&nbsp;your&nbsp;&nbsp;message! </p>
		</div>
		<div class='content_text' style='text-align:center;width:100%;margin-left:auto;margin-right:auto;'>
			<p>We'll get back to you using contact information provided: <?php ; $txt = $_GET["email"]; echo $txt;?></p>
			<p>Doesn't look right? Just send us another message and let us know!</p>
		</div>

		<div class="content_overlay" style='top:60%'>
			<p> Ask the animals, and they will teach you... In His hand is the life of every living thing  and the breath of every human being. </p>
			<p style='font-size:12px'>Job 12:7-12</p>
<!-- 			<img class='object-fit_contain' src="images/about.png" alt="Arcadia Farmlet"> -->
		</div>
		

	</section>	


	
<script src="js/main.js"></script>
</body>




