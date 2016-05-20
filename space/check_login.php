<?php
	include 'connection.php';
	session_start(); 
	include 'functions.php';
	$login=$_POST['login'];
	$password=$_POST['password'];
	   $query = "SELECT login,password,id FROM users WHERE login='$login'";
        $result = mysql_query($query);
	   $row = mysql_fetch_array($result);
	   if ($row['login']==$login) {
		  if ($password!=$row['password']) {
			 echo "Password is incorrect!";
        }else{
			 $_SESSION['id'] = $row['id'];
			 echo "";
         }
	   }else{
		  echo "There is no such login!";
		
		  }		

 ?>