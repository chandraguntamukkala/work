$(function(){
    var operation = "A"; //"A"=Adding; "E"=Editing
    var selected_index = -1; //Index of the selected list item
    var tbClients = localStorage.getItem("tbClients");//Retrieve the stored data
    tbClients = JSON.parse(tbClients); //Converts string to object
    if(tbClients == null) {tbClients = [];}//If there is no data, initialize an empty array
    $("#txtID").val(tbClients.length+1);

function Add(){
    var client = JSON.stringify({
        ID :$("#txtID").val(),
        Name : $("#txtName").val(),
        Phone : $("#txtPhone").val(),
        Email : $("#txtEmail").val()
    });
    tbClients.push(client);
    localStorage.setItem("tbClients", JSON.stringify(tbClients));
    //alert("The data was saved.");
    return true;
}

function Edit(){
    tbClients[selected_index] = JSON.stringify({
        ID : $("#txtID").val(),
        Name : $("#txtName").val(),
        Phone : $("#txtPhone").val(),
        Email : $("#txtEmail").val()
    });
    //Alter the selected item on the table
    localStorage.setItem("tbClients", JSON.stringify(tbClients));
    //alert("The data was edited.");
    operation = "A";
    //Return to default value
    return true;
}

function Delete(){
    tbClients.splice(selected_index, 1);
    localStorage.setItem("tbClients", JSON.stringify(tbClients));
    //alert("Client deleted.");
}
   
$(document).on( "submit", "#frmItem", function(){    
    if(operation == "A")
        return Add();
    else
        return Edit();        
});
$(document).on( "click", ".btnEdit", function(){
    operation = "E";
    selected_index = parseInt($(this).attr("alt").replace("Edit", ""));
    var cli = JSON.parse(tbClients[selected_index]);
    $("#txtID").val(cli.ID);
    $("#txtName").val(cli.Name);
    $("#txtPhone").val(cli.Phone);
    $("#txtEmail").val(cli.Email);
    $("#txtID").attr("readonly","readonly");
    $("#txtName").focus();
});
$(document).on( "click", ".btnDelete", function(e){
    selected_index = parseInt($(this).attr("alt").replace("Delete", ""));
    Delete();
    List();
});
$(document).bind("onload",List());
   
function List(){        
    $("#tblList").html("");
    $("#tblList").html(
        "<thead>"+
        "<tr>"+
        "<th>Action</th>"+
        "<th>ID</th>"+
        "<th>Name</th>"+
        "<th>Phone</th>"+
        "<th>Email</th>"+
        "</tr>"+
        "</thead>"+
        "<tbody>"+
        "</tbody>" );
    for(var i in tbClients){
        var cli = JSON.parse(tbClients[i]);
        $("#tblList tbody").append("<tr>"+
        "<td><img src='edit.jpg' height=30; width=30 alt='Edit"+i+"' class='btnEdit'/>"+
        "<img src='delete.jpg' height=30; width=30 alt='Delete"+i+"' class='btnDelete'/>"+
        "</td>" +
        "<td>"+
        cli.ID+"</td>"+"<td>"+
        cli.Name+"</td>"+"<td>"+
        cli.Phone+"</td>"+"<td>"+
        cli.Email+"</td>"+"</tr>");
    }
}
});





