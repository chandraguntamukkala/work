<!DOCTYPE html>
<html>
<head>
<title>Sorting</title>
<script type="text/javascript">
		function myFunction() 
		{
		var a=document.getElementById("a").value;
		var b=document.getElementById("b").value;
		var c=document.getElementById("c").value;
		var d=document.getElementById("d").value;
		var e=document.getElementById("e").value;
		var f=document.getElementById("f").value;
		var g=document.getElementById("g").value;
		var h=document.getElementById("h").value;
		var i=document.getElementById("i").value;
		var j=document.getElementById("j").value;
		var points = [a,b,c,d,e,f,g,h,i,j];
		points.sort(function(a, b){return a-b});
    	document.getElementById("demo").innerHTML=points;
		}
</script>
</head>
<body>
	<p id="demo"></p>
	<form>
		<div align="center">
			<h1>Sorting numbers</h1>
			Textbox1:<input type="Text" id="a" name="srt" value=""><br>
			Textbox2:<input type="Text" id="b" name="srt" value=""><br>
			Textbox3:<input type="Text" id="c" name="srt" value=""><br>
			Textbox4:<input type="Text" id="d" name="srt" value=""><br>
			Textbox5:<input type="Text" id="e" name="srt" value=""><br>
			Textbox6:<input type="Text" id="f" name="srt" value=""><br>
			Textbox7:<input type="Text" id="g" name="srt" value=""><br>
			Textbox8:<input type="Text" id="h" name="srt" value=""><br>
			Textbox9:<input type="Text" id="i" name="srt" value=""><br>
			Textbox10:<input type="Text" id="j" name="srt" value=""><br>
			<input type="button" value="sort" onclick="myFunction()">
		</form>
</body>
</html>