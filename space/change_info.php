<?php 
	$id = $_SESSION['id'];
	$query = "SELECT * FROM users WHERE id=$id";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);

 ?>
<link rel="stylesheet" type="text/css" href="css/change_info.css">
<title>Данные</title>
<div class="col-lg-8 col-md-8">
    	

    	<div class="text-center">
			<div class="form">
			<form method="post" action="change_info_php.php">	
                         
				<input class="input" value="<?=$row['name']?>" name="name" type="text" maxlength="50" size="30px;" 
    					 placeholder="Name" spellcheck='true'>

    			<input class="input" value="<?=$row['surname']?>" name="surname" type="text"  maxlength="50" size="30px;" 
    					 placeholder="Surname" spellcheck='true'>
    		

     		 	<input class="input" value="<?=$row['password']?>" name="password" type="text" ="" maxlength="30" size="30px;"
    					 placeholder="Password" >
    				   		

    			<select value="<?=$row['city']?>" name="city">
    				<option disabled selected="selected">City</option>
    				<option>Almaty</option>
    				<option>Astana</option>
    			</select>

    			<select value="<?=$row['gender']?>" name="gender">
    				<option disabled selected="selected">Gender</option>
    				<option>Male</option>
    				<option>Female</option>
    			</select>

    			<select value="<?=$row['age']?>" name="age">
    				<option disabled selected="selected">Age</option>
    				<option>18</option>
    				<option>19</option>
    				<option>20</option>	
    				<option>21</option>
    			</select>

    			<input class="btn"  type="submit" value="Change"></input>
    	</form>

		</div>
		
	</div>		
    </div>
