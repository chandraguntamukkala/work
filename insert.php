<?php
mysql_connect('localhost','root','');
mysql_select_db('chandu') or die (mysql_error().'='.mysql_errno());

//if(isset($_POST['submit'])){
	//print_r($_POST);
	$ids=$_POST['ID'];
	$nam=$_POST['Name'];
	$phon=$_POST['Phone'];
	$emai=$_POST['Email'];

$sql="INSERT INTO ctable(ID,Name,Phone,Email)VALUES('$ids','$nam','$phon','$emai')";
mysql_query($sql);
mysql_close();

?>






 