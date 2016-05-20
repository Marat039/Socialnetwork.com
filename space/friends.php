	<?php 
		$my_id=$_SESSION['id'];
		if (isset($_GET['fid'])) $id=$_GET['fid'];
		else $id=$my_id;
		$friends=count(file("friends/$id.txt"));
		
		$res=mysql_query("SELECT id1 FROM `request` WHERE id2='$id'");
		$num = mysql_num_rows($res);
		$followers="";
		if( $num>0){
			$followers=$num;
		}
		if ($friends==0) {
			$friends="";
		}
	 ?>
	<title>Friends</title>	
	<link rel="stylesheet" type="text/css" href="css/friends_style.css">
<!-- Центральная колонка -->
	<div class="col-md-8 col-lg-8">
	<!-- Поиск -->
		
		<div class="text-center">
			<input class="search" placeholder="Search..."></input>
		</div>
		
		<div id="resSearch"></div>
		<script type="text/javascript">
// AJAX SEARCH
$(function() {
	$(".search").keyup(function(){
		var search = $(".search").val();
		$("#resSearch").html("");		
		$.ajax({
			type: "POST",
			url: "search.php",
			data: {"search": search},
			cache: false,						
			success: function(response){
				$("#resSearch").html(response);
			}
		});
		return false;
	});
});
</script>
	
	<!-- Кнопки -->
			<div class="btn-group btn-group-justified " id="buttons" >
  				<a href="pattern.php?link=friends" class="btn btn-primary">Friends</a>
  				<a href="pattern.php?link=request" class="btn btn-primary">Requests</a>	
			</div>

	
	<?php
	if (isset($_GET['fid'])) {
		$friend_id=$_GET['fid'];
		show_friends($friend_id,$my_id);
	}else{
		show_friends($my_id,$my_id);
	}   
 ?>

<!-- FOOTER -->
			
</div>
