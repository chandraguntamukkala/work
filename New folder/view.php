<?php
include('db.php');
 $sql="SELECT * FROM mytable";
 $c=mysql_query($sql);
 //print_r($c);
 while($res=mysql_fetch_row($c)){
	 //echo "<pre>";
	$data[]=$res;
}
//print_r($data);exit;

?>
 
 <html>
 <body>
<table align="center" cellpadding="5" cellspacing="0" width="70%" border="1">
<tr style="background-color:#FCF;">
<td>id</td>
<td>name</td>
<td>phone</td>
<td>email</td>
</tr

<?php	foreach($data as $value){  ?>

<tr>
<td><?php echo  $value[0]; ?></td>
<td><?php echo  $value[1]; ?></td>
<td><?php echo  $value[2]; ?></td>
<td><?php echo  $value[3]; ?></td>
</tr>

<?php } ?>
</table>
</body>
</html>
