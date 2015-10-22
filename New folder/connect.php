<?php
include('db.php');

//if(isset($_POST['submit'])){
	//print_r($_POST);
    $name= $_POST['name'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	//}

echo $sql = "INSERT INTO mytable(name,phone,email) VALUES ('$name','$phone','$email')";	
mysql_query($sql);
?>