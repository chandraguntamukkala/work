<html>
<head>
<title>
factorial
</title>
<h1>Factorial Of A Number</h1>
<script type="text/javascript">
function myFact()
	{
	var fact=1;
	var i;
	var n=document.frm1.name.value;
	for(i=1;i<=n;i++)
	{
		fact=fact*i;
	}
document.getElementById("fact2").innerHTML=fact ;
}
</script>
</head>
<body>
	<p id="fact2"></p>
<div align="center">
	
<form name=frm1>
Enter any number :<input type="text" name="name">
<input type="button" value="calculate" onclick="myFact()">
</form>
</body>
</html>