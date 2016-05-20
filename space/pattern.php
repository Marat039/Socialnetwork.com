<?php 
include 'pattern_php.php';
 ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/common_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="images\elegant_font\HTML CSS\style.css">
	<script type="text/javascript" src="js.bootstrap.min.js">
	</script>
	<script src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="images\elegant_font\HTML CSS\lte-ie7.js"></script>
	<script type="text/javascript" src="js.npm.js"></script>
	<script type="text/javascript" src="js.bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<body>

<!-- LEFT COLUMN -->
	<div class="col-md-2 col-lg-2" id="left">
		<h2><?=$name?> <?=$surname?></h2>
			
		<div class="links">
			<ul>
				<li><div class="link"><a href="pattern.php?link=page">My page</a></div></li>
				<li><div class="link"><a href="pattern.php?link=friends">Friends</a></div></li>
				<li><div class="logout"><a href="pattern.php?link=out">Log out</a></div></li>
			</ul>
		</div>
	</div>
	<!-- Midle -->
	<div >
	<?php
		check_link($link);
	?>
	</div>


	<div class="col-md-2 col-lg-2" id="right"></div>

</body>
</html>