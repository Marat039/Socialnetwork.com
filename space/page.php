<?php 
include 'page_php.php'; 
?>
<title><?= $name ?> <?= $surname ?></title>
<link rel="stylesheet" type="text/css" href="css/page_style.css">

<div class="col-lg-8 col-md-8">
		
	<div class="text-center" >
			
		<div class="middle-column">
			<img src="images/<?= $image ?>" alt="foto" class="main-foto"></img><br>
			<a class="putimg" href="putimage.php">Change image</a><br>
			<a id="change_info" href="pattern.php?link=change_info">Change information</a><picture></picture><p></p>
			<p class="name"><?= $name ?> <?= $surname ?></p>
			
			
			<div class="info"  >
				<div class="info-left">
					<p>Gender: <?=$gender?></p>
					<p>Age: <?=$age?></p>
					<p>City: <?=$city?></p>
				</div>
					
			</div>
		</div>
	</div>
</div>
