<?php 
    function check_link($link){
        switch ($link) {
            case 'page':
                   include 'page.php';
                    break;
            case 'friends':
                include 'friends.php';
                break;
            case 'add_friend':
                include 'add_friend.php';
                break;
            case 'friend_page':
                include 'friend_page.php';
                break;
            case 'request':
                include 'request.php';
                break;
            case 'request_php':
                include 'request_php.php';
                break;
            case 'change_info':
                include 'change_info.php';
                break;                 
            case 'out':
                session_destroy();
                header('location: index.php');
                break;
        }
    }	

    function save_user($arr){
    	$arr=array();
    	if (isset($_POST['login'])) { 
    			$login = $_POST['login']; 
    			if ($login == '') { 
    				unset($login);}
    			$arr[]=$login; 
    			} 
        if (isset($_POST['password'])) { 
        	$password=$_POST['password']; 
        	if ($password =='') { 
        		unset($password);}
        		$arr[]=$password; 
        	}
        if (isset($_POST['name'])) { 
        	$name=$_POST['name']; 
        	if ($name =='') { 
        		unset($name);}
        		$arr[]=$name; 
        	}
        if (isset($_POST['surname'])) { 
        	$surname=$_POST['surname']; 
        	if ($surname =='') { 
        		unset($surname);}
        		$arr[]=$surname; 
        	}

        if (isset($_POST['city'])) { 
        	$city=$_POST['city'];
        	$arr[]=$city;
        }else{
        	$city="";
        }
        if (isset($_POST['gender'])) { 
        	$gender=$_POST['gender'];
        	$arr[]=$gender;
        }else{
        	$gender="";
        }
        if (isset($_POST['age'])) { 
        	$age=$_POST['age'];
        	$arr[]=$age;
        }else{
        	$age="";
        }
        
    	$result = mysql_query("SELECT id FROM users WHERE login='$login'");
        $myrow = mysql_fetch_array($result);
        if (!empty($myrow['id'])) {
        exit ("<h2>Your login is busy</h2>");
        }
    	$result2 = mysql_query("INSERT INTO users (login,password,name,surname,city,gender,age,image) VALUES('$login','$password','$name','$surname','$city','$gender','$age','user.png')");
        if ($result2){   
            $result3 = mysql_query("SELECT id FROM users WHERE login='$login'");
            $arr3=mysql_fetch_array($result3);
            $id=$arr3['id'];
            $_SESSION['id']=$id;
            $fo=fopen("friends/$id.txt",'a+');
            fclose($fo);
            header("location: pattern.php");
        }
     else {
        exit();
        }
    }

    function show_friends($id,$my_id){
        $arr=file("friends/$id.txt");
        $my_arr=file("friends/$my_id.txt");
        if (empty($arr)) {
        }else{
            foreach ($arr as $fid) {
                $res = mysql_query("SELECT `name`, `surname`, `image` FROM `users` WHERE id='$fid'");
                $row = mysql_fetch_array($res);
                $name = $row['name'];
                $surname = $row['surname'];
                $image = $row['image'];
                ?>
                <!--Друг № 1  -->
                    <div class="content">
                        <hr>
                        <img class="friend_foto" src="images/<?=$image?>">
                        <div class="friend_links" >
                                <ul>
                                    <li><a id="name" href="pattern.php?link=friend_page&fid=<?=$fid?>"><?= $name ?> <?= $surname ?></a></li>
                                        <?php
                                        if ((int)$fid!=(int)$my_id) {
                                            echo "<li><a href='pattern.php?link=friend_page&fid=$fid'>Watch profile</a></li>";
                                        }
                                        if (!in_array($fid,$my_arr) && (int)$my_id!=(int)$fid) {
                                           echo "<li><a href='pattern.php?link=add_friend&fid=$fid'>Add to friend</a></li>";
                                        }
                                        ?>                                       
                                    <li><a href="pattern.php?link=friends&fid=<?=$fid?>">Watch friends</a></li>

                                    
                                </ul>
                        </div>                   
                                                
                    </div>

        <?php
            }
        }
    }



?>