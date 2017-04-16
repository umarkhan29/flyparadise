<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		include_once('home/catalog/connect.khan');
		include_once('home/components/val.php');
		 //var $__ValFlag; val tbr
?>


<?php

if(isset($_POST['btn'])){ 
		$name=mysql_real_escape_string(trim(strip_tags(stripslashes($_POST['name']))));
		$about=mysql_real_escape_string(trim(strip_tags(stripslashes($_POST['about']))));	;
		$desc=mysql_real_escape_string(trim(strip_tags(stripslashes($_POST['desc']))));	;					
		$query="INSERT INTO `reviews`( `name`, `about`, `desc`) VALUES ('$name', '$about', '$desc');";
		
		if(mysqli_query($dbconn,$query) or die( mysqli_error())){
			echo'<div style="width:80%;padding-top:50px; padding-bottom:60px; padding-left:20%; overflow:hidden; color:green; font-size:32px; background:#999999;">Review added</div>';
		}
		else{	
			echo '<div style="width:80%;padding-top:50px; padding-bottom:60px; padding-left:20%; overflow:hidden; color:red; font-size:32px; 		background:#999999;">Something went wrong</div>';
		}				
}
?>



<p>
		<form action="" method="POST">
			<input type="text" name="name" placeholder="Name"/><br />
			<input type="text" name="about" placeholder="Review About"/><br />
			<input type="text" name="desc" placeholder="Review"/><br />
			<input type="submit" name="btn" value="Add Review"/><br />
		</form>
</p>

</body>
</html>
