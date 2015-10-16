<html>
<head>
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
       <button>Add Data</button>
<table rules="all" style="background:#fff;">
    <tr>
    <td style="font-size:14px;" >Number</td>
    <td style="font-size:14px;" >Name</td>
    <td style="font-size:14px;">Gender</td>
    <td style="font-size:14px;">Address</td>
    <td><button><span style="font:normal 12px agency, arial; color:black;cursor:pointer;" onclick="addMoreRows(this.form);"> Action </span></button> </td>
    </tr>
    <tr id="rowId">
    <td><input name="n1" id="n1" type="text" value="6" size="17%"/></td>
    <td><input name="n2" id="n2" type="text" value="Akmai" /></td>
    <td><input name="n3" id="n3" type="text" value="Laki-laki" /></td> 
    <td><input name="n4" id="n4" type="text" value="Calee" /></td> 
    </table>
    <div id="addedRows"></div> </td>
    </tr>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 

<script type="text/javascript"> 
  var rowCount = 1;
  function addMoreRows(frm) { 
         rowCount ++; 
    var a = $('#n1').val();
    var b = $('#n2').val();
    var c = $('#n3').val();
    var d = $('#n4').val();

  var recRow = '<p id="rowCount'+rowCount+'"><tr><td><input name="" type="text" size="17%" maxlength="120" value="'+a+'"/></td><td><input name="" type="text" maxlength="120" value="'+b+'" style="margin: 4px 5px 0 5px;"/></td><td><input name="" type="text" maxlength="120" value="'+c+'" style="margin: 4px 10px 0 0px;"/></td><td><input name="" type="text" maxlength="120" value="'+d+'" style="margin: 4px 5px 0 5px;"/></td></tr> <a href="javascript:void(0);" onclick="removeRow('+rowCount+');"><button>Delete</button></a></p>'; 
  $('#addedRows').append(recRow);
   } 
   function removeRow(removeNum) 
   { 
           $('#rowCount'+removeNum).remove();
   }
    </script>

</body>
</html>