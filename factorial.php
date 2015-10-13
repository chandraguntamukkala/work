

<html>
<head>
<title>Student form</title>
<script type="text/javascript">
//Factorial start here
function factFun() {
//var n=5;
var n=    document.getElementById("fact").value;
document.getElementById("fact_text").innerHTML=n;
var m=1;
while(n) {
    m=m*n
    n--;
}
//alert(m);
document.getElementById("fact_result").innerHTML=m;
}
//Factorial end here
</script>
</head>
<body>


Factorial:-<br>
Enter Number  <input type="text" name="fact" id="fact" value=""><br>
<button id="submit" name="submit" onclick="factFun();">Factorial</button><br>
<span id="fact_text"></span> Factorial is: <span id="fact_result"></span> 

</body>
</html>