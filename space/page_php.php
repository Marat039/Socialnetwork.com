<?php 
		$id = $_SESSION['id'];
		$res = mysql_query("SELECT * FROM `users` WHERE id='$id'");
		$row = mysql_fetch_array($res);
		$name = $row['name'];
		$surname = $row['surname'];
		$city = $row['city'];
		$gender = $row['gender'];
		$age = $row['age'];
		$image = $row['image'];
		if ($age==0) {
			$age="";
		}else{
			$age=$age." лет";
		}
 ?>