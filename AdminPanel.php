<?php 
		require "dialogDraws.php";
		session_start();
		
		if (!isset($_SESSION['user'])) {
		header("Location: Admin.php");
		die();
		
		} else if ($_SESSION['user'] == 'Admin') {
				require "DatabasePosts.php"; 
				} else die();
		
		
		?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<title>Admin Control Panel</title>
	<!-- IMPORT JQUERY UI -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/be7019ee387/integration/jqueryui/dataTables.jqueryui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="css/dataTablesCustomers.css">
    <link rel="stylesheet" href="css/dataTablesOrders.css">

  <!-- IMPORT OF JQUERY FUNCTIONS -->
  <script type="text/javascript" src="JQueryFunctions.js"></script>

 <link rel="stylesheet" type="text/css" href="AdminCP.css">

    <script>
$(function() {
$( "#datepicker" ).datepicker({ minDate: 0, dateFormat: 'yy-mm-dd' });
});
</script>
  
  
</head>
<body >

		
    <div id="logo">
	 <a href="">
 	 <img src="images/logo.png" alt="" border="0"  />  </a></div>
	 <br/>
<div id="tabs" >
  <ul>
    <li><a href="#tabs-Products">Products</a></li>
    <li><a href="#tabs-Customer">Customer</a></li>
    <li><a href="#tabs-Order">Orders</a></li>
  </ul>
  <div id="tabs-Products">
  <!-------------------------------------- PRODUCT TAB CONTENT------------------------------------------------------------------>
 <table id="DBTableEvents" class="display" style="table-layout: fixed; width: 90%">
		<thead>
		<tr class="ui-widget-header ">
			<th width="5%">ID</th>
			<th width="15%">Name</th>
			<th width="10%">Description</th>
			<th width="7%">type ID</th>
			<th width="8%">Company ID</th>
			<th width="10%">Date/Time Start</th>
			<th width="5%">Time End</th>
			<th width="7%">Venue ID</th>
			<th width="15%">Price M/F</th>
			<th width="8%">Stock</th>
			<th width="5%">Flyer</th>
			</tr>
			</thead>
			
			<!-- PHP CODE TO READ DATABASE -->
<tbody >
			<?php
			
			$sql = "SELECT * FROM events";
			$STH = $GLOBALS["db"]->query($sql);
						
			while ($row = $STH->fetch(PDO::FETCH_ASSOC)) {
			
			$id = $row['id'];
			$name = $row ['name'];
			$description = $row['description'];
			$typeID = $row['typeID'];
			$company = $row['companyID'];
			$date = $row['date'];
			$time = $row['timeStart'];
			$timeEnd = $row['timeEnd'];
			$venueID = $row['venueID'];
			$priceMale = $row['pricemale'];
			$priceFemale = $row['pricefemale'];
			$discount = $row['memberdiscount'];
			$stock = $row['ticketstock'];
			$flyer = $row['flyerName'];
			
			
			echo "<tr > <td> $id </td> 
<td> $name </td> <td> $description </td> <td> $typeID  </td> <td> $company  </td>
 <td> $date / $time</td> <td> $timeEnd </td> <td> $venueID</td>  <td> $priceMale / $priceFemale | $discount% </td>  <td> $stock</td> 
<td> $flyer </td> </tr>";
			
			}
			
			?>
	
</tbody>	
 </table>
 
 <br/>
 
 <p> SELECTED EVENT: </p>
 <table style="table-layout: fixed; width: 100%" class="selectedEvents">
 		<tr >
			<th width="5%">ID</th>
			<th width="15%">Name</th>
			<th width="10%">Description</th>
			<th width="7%">type ID</th>
			<th width="8%">Company ID</th>
			<th width="10%">Date/Time Start</th>
			<th width="10%">Time End</th>
			<th width="7%">Venue ID</th>
			<th width="15%">Price M/F</th>
			<th width="8%">Stock</th>
			<th width="5%">Flyer</th>
		</tr>
 <tr id="selectedResultEvents"> </tr>
 
 </table>
 
  <br/>
 
 <!-- EVENTS BUTTON FUNCTIONS -->
<a href="javascript:void(null);" onclick="showAddNewEvent();"> <button id="new-product">Add New Event</button> </a>
 <a href="javascript:void(null);" onclick="showDeleteEvent();">  <button id="delete-product">Delete Event</button> </a>
   <a href="javascript:void(null);" onclick="showEditEvent();">  <button id="edit-product">View/Edit Event</button>  </a>
     <a href="javascript:void(null);" onclick="showEventPictures();">  <button id="edit-pictures">Upload Images</button>  </a>

   <?php dialogAddNewEvent(); ?>
 <!-- END DIALOG BOX -->
 
 
 
  </div>
 <!----------PRODUCT TAB END--------------->
  <div id="tabs-Customer">
    <!--------------------------------------------- CUSTOMER TAB CONTENT----------------------------------------------------->
		<table id="DBTableCustomer" class="display" style="table-layout: fixed; width: 90%;">
		<thead>
		<tr class="ui-widget-header ">
			<th width="">ID</th>
			<th width="">First Name</th>
			<th width="">Last Name</th>
			<th width="">Gender </th>
			<th width="">Email</th>
			<th width="">Phone No'</th>
			<th width="">Company</th>
			<th width="">Address..</th>
			<th width="">Customer Type</th>
			</tr>
			</thead>			
			<!-- PHP CODE TO READ DATABASE -->
<tbody >
			<?php
			
			$sql = "SELECT * FROM customers";
			$STH = $GLOBALS["db"]->query($sql);
						
			while ($row = $STH->fetch(PDO::FETCH_ASSOC)) {
			
			$id = $row['id'];
			$FName = $row['firstName'];
			$LName = $row['lastName'];
			$Sex = $row['gender'];
			$Email = $row['email'];
			$Phone = $row['phoneNumber'];
			$Company = $row['company'];
			$Address = $row['addressLine1']."|".$row['addressLine2']."|".$row['addressCity']."|".$row['addressPostal'];
			$customertypeID = $row['customertypeID'];                                                                                                                                                                                                                                                                                                                                              
			
			echo "<tr > <td> $id </td> 
<td> $FName </td> <td> $LName </td> <td> $Sex  </td> <td> $Email </td>
 <td> $Phone </td> <td> $Company </td> <td> $Address</td> <td> $customertypeID </td> </tr>";
			
			}
			
			?>
	
</tbody>	
 </table>
 
 <br/>
 
 <p> SELECTED CUSTOMER: </p>
 <table style="table-layout: fixed; width: 100%" class="selectedCustomer">
		<tr >
			<th width="">ID</th>
			<th width="">First Name</th>
			<th width="">Last Name</th>
			<th width="">Gender </th>
			<th width="">Email</th>
			<th width="">Phone No'</th>
			<th width="">Company</th>
			<th width="">Address..</th>
			<th width="">Customer Type</th>         
			</tr>
 <tr id="selectedResultCustomer"> </tr>
 
 </table>
 
  <br/>
 
 <!-- Customer BUTTON FUNCTIONS -->
 <a href="javascript:void(null);" onclick="showConfirmationDialogCustomer();">  <button id="delete-customer">Delete Customer</button> </a>
   <a href="javascript:void(null);" onclick="showEditDialogCustomer();">  <button id="edit-customer">Edit Customer</button>  </a>
      <a href="javascript:void(null);" onclick="showEmailDialog();">  <button id="email-customer">Email Customer</button>  </a>

   
   <!-- DELETE Customer DIALOG -------->
  <?php dialogDeleteCustomer(); ?>
  <!-- END DIALOG BOX -->
     
   <!-- EDIT Customer DIALOG --------->
<?php dialogEditCustomer(); ?>
 <!-- END DIALOG BOX -->
 
    <!-- EMAIL Customer DIALOG --------->
<?php dialogEmailCustomer(); ?>
 <!-- EMAIL DIALOG BOX -->
 
  </div>
	
 <!----------CUSTOMER TAB END--------------->
  <div id="tabs-Order">
      <!--------------------------------------------- ORDERS TAB CONTENT----------------------------------------------------->
	  
	<table id="DBTableOrders" class="display" style="table-layout: fixed; width: 90%;">
		<thead>
		<tr class="ui-widget-header ">
			<th width="30px">ID</th>
			<th width="60px">Products (IDs)</th>
			<th width="100px">Product Quantities</th>
			<th width="70px">Customer ID</th>
			<th width="80px">Date</th>
			<th width="80px">Time</th>
			<th width="100px">Auth String</th>
			<th width="80px">Total Payment</th>
			<th width="100px">Status(ID)</th>
			</tr>
			</thead>
			
			<!-- PHP CODE TO READ DATABASE -->
<tbody >
			<?php
			
			$sql = "SELECT * FROM orders";
			$STH = $GLOBALS["db"]->query($sql);
						
			while ($row = $STH->fetch(PDO::FETCH_ASSOC)) {
			
			$id = $row['id'];
			$productID = $row ['productIDArray']; //Needs to be split
			$productQuantity = $row['productQuantityArray']; //Needs to be split
			$CustomerID = $row['customerID'];
			$Date = $row['date'];
			$Time = $row['time'];
			$AuthString = $row['authorisationString'];
			$Payment = $row['totalPrice'];
			$StatusID = $row['statusID']; // 1 is Processing, 2 is Shipped, 3 is Cancelled, 4 is Refunded.
			$Status = 'status'.$StatusID;
			$Status = $xml->status->$Status; 
			
			
			echo "<tr > <td> $id </td> 
<td> $productID </td> <td> $productQuantity </td> <td> $CustomerID  </td> <td> $Date </td>
 <td> $Time </td> <td> $AuthString</td>  <td> £$Payment</td>  <td> $Status ($StatusID)</td></tr>";
			
			}
			
			?>
	
</tbody>	
 </table>
 
 <br/>
 
 <p> SELECTED ORDER: </p>
 <table style="table-layout: fixed; width: 100%" class="selectedOrders">
		<tr >
			<th width="30px">ID</th>
			<th width="60px">Product IDs</th>
			<th width="120px"> Product Quantities </th>
			<th width="120px">Customer ID</th>
			<th width="200px">Date </th>
			<th width="150px"> Time </th>
			<th width="150px"> Auth String </th>
			<th width="150px"> Total Payment </th>
			<th width="150px"> Status (ID) </th>
			</tr>
 <tr id="selectedResultOrders"> </tr>
 
 </table>
  <!-- Hidden Tables -->
  <table style="display:none;" >
		<tr >
			<th width="30px">ID</th>
			<th width="60px">Title</th>
			<th width="120px">First Name</th>
			<th width="120px">Last Name</th>
			<th width="210px">Email</th>
			<th width="150px">Phone No'</th>
			<th width="300px">Address..</th>
			</tr>
 
 <?php 
 			$sql = "SELECT * FROM customers";
			$STH = $GLOBALS["db"]->query($sql);
						
			while ($row = $STH->fetch(PDO::FETCH_ASSOC)) {
			
			$id = $row['id'];
			$FName = $row['firstName'];
			$LName = $row['lastName'];
			$Email = $row['email'];
			$Phone = $row['phoneNumber'];
			$Address = $row['addressLine1']."|".$row['addressLine2']."|".$row['addressCity']."|".$row['addressPostal'];
			
			
			echo "<tr > <td class='customerRow$id'> $id </td> 
<td class='customerRow$id'>  </td class='customerRow$id'> <td class='customerRow$id'> $FName </td> <td class='customerRow$id'> $LName  </td> <td class='customerRow$id'> $Email </td>
 <td class='customerRow$id'> $Phone </td> <td class='customerRow$id'> $Address</td> </tr>";
			
			}
 
 ?>
 </table>

 
  <br/>
 
 <!-- Customer BUTTON FUNCTIONS -->
 <a href="javascript:void(null);" onclick="showViewOrderDialog();">  <button id="view-order">View Order</button> </a>
   <a href="javascript:void(null);" onclick="showEditStatusDialog();">  <button id="edit-status">Change Status</button>  </a>
      <a href="javascript:void(null);" onclick="showViewCustomerDialog();">  <button id="view-customer">View/Contact Customer</button>  </a>

   
   <!-- VIEW ORDERS DIALOG -------->
  <?php dialogOrdersView(); ?>
  <!-- END DIALOG BOX -->
     
   <!-- CHANGE STATUS DIALOG --------->
<?php dialogOrderStatus(); ?>
 <!-- END DIALOG BOX -->
 
    <!-- CONTACT CUSTOMER DIALOG --------->
<?php dialogCustomerView(); ?>
 <!-- EMAIL DIALOG BOX -->
 
  </div>
<!----------ORDERS TAB END--------------->
</div> <!-- TABS END -->


</body>
</html>


