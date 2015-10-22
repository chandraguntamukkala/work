<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="functions.js"></script> 
 <script>
$(document).ready(function () {

   (function ($) {

       $('#filter').keyup(function () {

           var rex = new RegExp($(this).val(), 'i');
           $('#tblList tr').hide();
           $('#tblList tr').filter(function () {
               return rex.test($(this).text());
           }).show();

       })

   }(jQuery));

});
</script>
</head>
<body>

<form id="frmItem" action="insert.php" method="POST">
 	
ID:<input type="text" name="ID" class="form-control" id="txtID" placeholder="Enter your Number"></br>
Name:<input type="text" name="Name" class="form-control" id="txtName" placeholder="Enter your Name"></br>
Phone:<input type="text" name="Phone" class="form-control" id="txtPhone" placeholder="Enter your Phone number"></br>
Email:<input type="text" name="Email" class="form-control" id="txtEmail" placeholder="Enter your Email"></br>
<button id="btnSave" class="btn btn-primary">Save</button>

</form>

    <div class="input-group"> <span class="input-group-addon">Filter</span>
    <input id="filter" type="text" class="form-control" placeholder="Type here...">
    </div>
    
<table id="tblList" class="table table-striped table-bordered">
    	<tr>
			<td>Action</td><td>ID</td><td>Name</td><td>Phone</td><td>Email</td>
		</tr>
</table>
    

</body>
</html>