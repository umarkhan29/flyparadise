<?php
//creating dynamic variables

$count=7;
$abc="iteration";

?>
<form action="" method="POST">
	<?php

	for($i=1;$i<=$count;$i++){
		echo '<input type="text" name="iteration'.$i.'" />';
		echo "<br>";
	}
	?>
	<input type="submit" value="Go" name="btn" />
</form>


<?php
if(isset($_POST['btn'])){
	for($i=1;$i<=$count;$i++){
		${$abc.$i}="iteration".$i;
		$a= ${$abc.$i};
	 ${$abc.$i}=$_POST[$a];
	echo ${$abc.$i}."<br>";
		
	}
}
?>