<html>
<head>
<script type="text/javascript">
function countWords(str)
{
   var count=0;
   words=str.split(" "); 
    for(i=0; i<words.length; i++)
    {
      if(words[i]!= " ")
      count += 1; 
    }
	document.cform.results.value="" +count +"";
}
</script>
</head>
<body>
<form name="cform">
Enter a text:
<textarea name=cs1 rows=5 cols=90>
</textarea>
<input type=button value="Analyze" onClick="countWords(document.cform.cs1.value)";>
<input type=button name="cbutton" value="Clear" onClick='document.cform.results.value=""';><br>
<textarea name=results rows=5 cols=90>
</textarea>
</form>  
</body>
</html>