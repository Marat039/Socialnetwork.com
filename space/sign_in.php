<!DOCTYPE html>
	<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js.bootstrap.min.js">
	</script>
	<script src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js.npm.js"></script>
	<script type="text/javascript" src="js.bootstrap.js"></script>
	<meta charset="UTF-8">
	<div id="all">
	<h4>Sig in</h4>
	<form >
			 	<input class="text-field"  id="login" name="login" type="text" required maxlength="50" size="30px;" 
    					 value="E-mail">
    			<br>

     		 	<input class="text-field" id="password" name="password" type="password" required maxlength="30" size="30px;"
    				value="" ><br>
				
				<input id="submit" class="btn" type="submit" value="Sign in"></input>
				
				<div id="resSearch">
					
				</div>
	</form>
</div>
<!-- AJAX -->
<script type="text/javascript">

$(function() {
	$("#submit").click(function(){
		var login = $("#login").val();
		var password = $("#password").val();	
		$.ajax({
			type: "POST",
			url: "check_login.php",
			data: {"login": login,"password":password},
			cache: false,						
			success: function(response){
				if (response=="") {
					$(location).attr('href',"pattern.php");
				}else{
					$("#resSearch").html(response);
				}
			}
		});
		return false;
	});
});
</script>		
</html>	
