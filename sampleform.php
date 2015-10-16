<html>
<head>
<title>Data</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function() 
{
    $('.tabs .tab-links a').on('click', function(e)  
    {
        var currentAttrValue = $(this).attr('href');
        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).show().siblings().hide();
         // Change/remove current tab to active
        $(this).parent('button').addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });
});
</script>
</head>
<body>
  		<div class="tabs">
    	<ul class="tab-links">
        <button class="active"><a href="#tab1">Account Overview</a></button>
        <button><a href="#tab2">Billing Information</a></button>
    	</ul>
 
    	<div class="tab-content">
        <div id="tab1" class="tab active">
            <p>
            <dl class="accordion">

			<dt><a href="">Time and Employee Management
			<div align="right">
			<button>Add User Accounts</button>
			</div>
			</a></dt>
			<dd>
			<table id="tab1" class="tab active">
			<tr>
			<td>Plan</td>
			<td>:Time and Employee Management System with Unlimited</td>
			</tr>
     		<tr>
     		<td>Price</td>
     		<td>:$0.00</td>
     		</tr>
     		<tr>
     		<td>Subscription Amount</td>
     		<td>:$90.00</td>
     		</tr>
     		<tr>
     		<td>Discount</td>
     		<td>:100%(unlimited users for beta joiners)</td>
     		</tr>
     		<tr>
     		<td>Billed Amount</td>
     		<td>:$0.00</td>
     		</tr>
			</table>
			<table id="tab2" class="tab" bgcolor="blue" width="2000" style="color:white">
			<tr>
			<td>Date</td>
			<td>Type</td>
			<td>Details</td>
			<td>Amount</td>
			</tr>
			</table>
			<p>There are no results</p>
			</dd>

			<dt><a href="">Vendor and Invoice Management
			<div align="right">
			<button>Learn More</button>
			</div>
			</a></dt>
			<dd>
			</dd>
			</dl>
            </p>
            </div>
            <div id="tab2" class="tab">
            <p>
            	Empty
            </p>
            </div>
        </div>
    	</div>
</body>
</html>