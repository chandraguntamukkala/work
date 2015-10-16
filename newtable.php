<html> 
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
  <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css"/>
	

<div class="container">
<button class="btn btn-success">Add Data</button>
	
<script>
$(document).ready(function(){
$("button").click(function(){
  $("#form").show();
  $("#table").hide();	
});
});

$(document).ready(function(){
$("#btn").click(function(){
	$("#table").show();
	$("#frm").hide();

var a=$("#num").val();	
var b=$("#name").val();
var c=$("#gen").val();
var d=$("#phn").val();
var e=$("#add").val();
var ac="'"+ a +"'";
var bc="'"+ b +"'";
var cc="'"+ c +"'";
var dc="'"+ d +"'";
var ec="'"+ e +"'";
$("#number_table").append('<tr><td class="info">'+a+'</td><td class="info">'+b+' </td><td class="info">'+c+'</td><td class="info">'+d+'</td><td class="info">'+e+'</td><td class="info"><button id="removebutton" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"</span></button><button data-status="'+ac+','+bc+','+cc+','+dc+','+ec+'" onclick="return editFun('+ ac +','+ bc +','+ cc +','+ dc +','+ ec +');" ID="btnPopup" runat="server" Text="Show Popup" class="btn btn-success"><span class="glyphicon glyphicon-pencil"</span></button></td></tr>');
});
});

$("[id*=btnPopup]").live("click", function () {
$("#dialog").dialog({
            width: 500,
            height: 600,
            title: "New Data",
            buttons: {
                Close: function () {
                    $(this).dialog('close');
                    }
            }
        });
        return false;
    });



 $(document).on('click', '#removebutton', function(){
    $(this).closest('tr').remove();
     return false;
 });

$(document).ready(function(){
    $("#bton").click(function(){
        $("#frm").remove();
    });
});


</script>

</head>


<body>
<div id="frm">
Number:<input type=text class="form-control" id="num" placeholder="Enter your Number" value=""></br>
Name:<input type=text class="form-control" id="name" placeholder="Enter your Name" value=""></br>
Gender:<input type=text class="form-control" id="gen" placeholder="Gender" value=""></br>
Phone:<input type=text class="form-control" id="phn" placeholder="Enter your Phone number" value=""></br>
Address:<input type=text class="form-control" id="add" placeholder="Enter your address" value=""></br>
<button id="btn" class="btn btn-primary">Save</button>
</div>

<button id="bton" class="btn btn-primary">Clear</button>


<div id="table">
	<table class="table table-striped table-bordered" id="number_table" >
		<tr>
			<td class="success">Number</td><td class="success">Name </td><td class="success">Gender</td><td class="success">Phone</td><td class="success">Address</td><td class="success">Action</td>
		</tr>
	</table>

</div>
<div id="dialog" style="display:none">
Number:<input type=text class="form-control" placeholder="Enter your Number" name="number" id="num1" value=""></br>
Name:<input type=text class="form-control" name="nam" placeholder="Enter your Name" id="name1" value=""></br>
Gender:<input type=text class="form-control" name="gender" placeholder="Gender" id="gen1" value=""></br>
Phone:<input type=text class="form-control"  name="phone" placeholder="Enter your Phone number" id="phn1" value="" ></br>
Address:<input type=text class="form-control" name="address" placeholder="Enter your address" id="add1"  value=""></br>

</div>

</body>
</html>

 

 
 