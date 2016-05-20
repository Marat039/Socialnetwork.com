<?php 
if(!isset($_SESSION['id'])) header('location: index.php');
		$fid = $_GET['fid'];
		$res = mysql_query("SELECT `name`, `surname`, `univer`, `faculty`, `spec`, `city`, `gender`, `age`, `status`, `about`, `image` FROM `users` WHERE id='$fid'");
		$row = mysql_fetch_array($res);
		$name = $row['name'];
		$surname = $row['surname'];
		$univer = $row['univer'];
		$faculty = $row['faculty'];
		$spec = $row['spec'];
		$city = $row['city'];
		$gender = $row['gender'];
		$age = $row['age'];
		$status = $row['status'];
		$about = $row['about'];
		$image = $row['image'];
		if ($image=="") {
			$image="anonymous-user-pic.png";
		}
		if ($age==0) {
			$age="";
		}else{
			$age=$age." лет";
		}
?>
<title><?= $name ?> <?= $surname ?></title>
<link rel="stylesheet" type="text/css" href="css/page_style.css">
<div class="col-lg-8 col-md-8">
		
	<div class="text-center" >
			
		<div class="middle-column">
			<img src="images/<?= $image ?>" alt="foto" class="main-foto"></img><br>
			<p class="name"><?= $name ?> <?= $surname ?></p>		
			<div class="info">
				<hr>				
				
				<div class="info-left">
					<p>Gender: <?= $gender ?></p>
					<p>Age: <?= $age ?></p>
					<p>City: <?= $city ?></p>
				</div>
				<hr>
			</div>

		</div>
	</div>
</div>
