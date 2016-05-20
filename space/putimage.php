<?php
  session_start();
  include 'connection.php';
?>
<title>Change image</title>
<form enctype="multipart/form-data" method="post" action="image.php">
    Image: <input type="file" name="image" />
  	<input type="submit" value="Download" />