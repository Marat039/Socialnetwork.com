<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Regestration</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/registration_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js.bootstrap.min.js">
	</script>
	<script type="text/javascript" src="js.npm.js"></script>
	<script type="text/javascript" src="js.bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<body>
	
    <div class="col-lg-2 col-md-2" id="right">
    </div>
    <div class="col-lg-8 col-md-8">
    	<h1>Regestratinon</h1>

    	<div class="text-center">
			<div class="form">
			<form method="post" action="save_user.php" name="Form" onSubmit="provForm(); return(false);">	

				<input class="input" name="login" type="text"  required maxlength="50" size="30px;" 
    					 placeholder="E-mail" spellcheck='true'>
                         
				<input class="input" name="name" type="text" required maxlength="50" size="30px;" 
    					 placeholder="Name" spellcheck='true'>

    			<input class="input" name="surname" type="text" required maxlength="50" size="30px;" 
    					 placeholder="Surname" spellcheck='true'>
    		

     		 	<input class="input" name="password" type="password" required maxlength="30" size="30px;"
    					 placeholder="Password" >

    			<input class="input" type="password" name="password2" maxlength="30" required="" size="30px;"
    					 placeholder="Repeat the password" >

    			<select name="city">
    				<option disabled selected="selected">Select city</option>
    				<option>Almaty</option>
    				<option>Astana</option>
    			</select>

    			<select name="gender">
    				<option disabled selected="selected">Gender</option>
    				<option>Male</option>
    				<option>Female</option>
    			</select>

    			<select name="age">
    				<option disabled selected="selected">Age</option>
    				<option>18</option>
    				<option>19</option>
    				<option>20</option>	
    				<option>21</option>
    			</select>
                <br>


    			<input class="btn"  type="submit" value="Sign up"></input>
    	</form>
        <!-- JAVASCRIPT VALIDATION -->
        <script type="text/javascript">
        function provForm() {
            obj_form=document.forms.Form;
            obj_pole_name =obj_form.name;
            obj_pole_login =obj_form.login;
            obj_pole_surname =obj_form.surname;
            obj_pole_password =obj_form.password;
            obj_pole_password2 =obj_form.password2;

            if (obj_pole_name.value==""){ 
            alert ("Напишите свое имя!"); 
            return;
            }
            login = obj_pole_login.value;
            if (login==""){
            alert ("Напишите Ваш E-mail!");
            return;
            }
            if (login.indexOf("@") == -1) { 
            alert("Введите корректный E-mail типа name@mail.ru"); 
            return; 
            } 
            if (login.indexOf(".") == -1) { 
            alert("Введите корректный E-mail типа name@mail.ru"); 
            return; 
            }
             if (obj_pole_surname.value==""){ 
            alert ("Напишите свою фамилию!"); 
            return;
            }
            if (obj_pole_password.value==""){ 
            alert ("Напишите пароль!"); 
            return;
            }
            if (obj_pole_password2.value==""){ 
            alert ("Повторите пароль!"); 
            return;
            }
            if (obj_pole_password2.value!=obj_pole_password.value){ 
            alert ("Пароли не совпадают!"); 
            return;
            }  
            obj_form.submit();
            }
       </script>

		</div>
		
	</div>		
    </div>
    
    <div class="col-lg-2 col-md-2" id="left"></div>
    </div>
</div>

</body>
</html>