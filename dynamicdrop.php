<html>
<head>
<title>3drop down list</title>
<script type="text/javascript">
function listboxchange1(pindex) 
{
document.form1.subcategory1.options.length=0;
document.form1.subcategory2.options.length=0;
document.form1.subcategory2.options[0]=new Option("select subcategory2", "");
switch (pindex) 
{
case "India":
document.form1.subcategory1.options[0]=new Option("select subcategory1", "");
document.form1.subcategory1.options[1]=new Option("Andhra Pradesh", "Andhra Pradesh");
document.form1.subcategory1.options[2]=new Option("Telangana", "Telangana");
break;
case "Pakistan":
document.form1.subcategory1.options[0]=new Option("select subcategory1", "");
document.form1.subcategory1.options[1]=new Option("Lahore", "Lahore");
document.form1.subcategory1.options[2]=new Option("Karachi", "Karachi");
break;
}
return true;
}
</script>
<script type="text/javascript">
function listboxchange(pindex) 
{
document.form1.subcategory2.options.length=0;
switch (pindex) 
{
case "Andhra Pradesh":
document.form1.subcategory2.options[0]=new Option("select subcategory2", "");
document.form1.subcategory2.options[1]=new Option("Visakhapatnam", "Visakhapatnam");
document.form1.subcategory2.options[2]=new Option("Vizianagaram", "Vizianagaram");
document.form1.subcategory2.options[3]=new Option("Vijayawada", "Vijayawada");
break;
case "Telangana":
document.form1.subcategory2.options[0]=new Option("select subcategory2", "");
document.form1.subcategory2.options[1]=new Option("Hyderabad", "Hyderabad");
document.form1.subcategory2.options[2]=new Option("Warangal", "Warangal");
break;
case "Lahore":
document.form1.subcategory2.options[0]=new Option("select subcategory2", "");
document.form1.subcategory2.options[1]=new Option("aa", "aa");
document.form1.subcategory2.options[2]=new Option("bb", "bb");
break;
case "Karachi":
document.form1.subcategory2.options[0]=new Option("select subcategory2", "");
document.form1.subcategory2.options[1]=new Option("cc", "cc");
document.form1.subcategory2.options[2]=new Option("dd", "dd");
break;
}
return true;
}
</script>
</head>
<body>
<div align="center">
<form id="form1" name="form1" onsubmit="return validateForm(); true">
Continent :
<select name="category" id="category" onchange="javascript: listboxchange1(this.options[this.selectedIndex].value);">
<option value="">Select Category</option>
<option value="India">India</option>
<option value="Pakistan">Pakistan</option>
</select>
Countries :
<script type="text/javascript">
document.write('<select name="subcategory1" onchange="javascript: listboxchange(this.options[this.selectedIndex].value);"><option value="">select subcategory 1</option></select>')
</script>
Cities :
<script type="text/javascript">
document.write('<select name="subcategory2"><option value="">select subcategory 2</option></select>')
</script>
</form>
</body>
</html>
