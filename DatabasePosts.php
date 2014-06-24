<?php

//// REMEMBER TO STORE DETAILS IN ROOT DIRECTORY

$db = new PDO('mysql:host=localhost;dbname=london_db;charset=utf8', $_SERVER['DB_USER'], $_SERVER['DB_PASS']);


if(isset($_POST['function'])) {

$function = $_POST['function'];

	switch ($function) {
    case "addNewEvent":
        addNewEvent();
        break;
    case "deleteProduct":
        deleteProduct();
        break;
    case "editProduct":
        editProduct();
		break;
	case "editCustomer":
		editCustomer();
        break;
	case "emailCustomer":
		emailCustomer();
		break;
	case "deleteCustomer":
		deleteCustomer();
		break;
}

$function = null;

}

 ///////////////////////////////
/* Product related functions */

function addNewEvent(){
$name = $_POST['name'];
$description = $_POST['description'];
$typeID = $_POST['typeID'];
$companyID = $_POST['companyID'];
$date = $_POST['date'];
$timeStart = $_POST['timeStart'];
$timeEnd = $_POST['timeEnd'];
$venueID = $_POST['venueID'];
$priceMale = $_POST['priceMale'];
$priceFemale = $_POST['priceFemale'];
$discount = $_POST['discount'];
$stock = $_POST['stock'];
$flyer = $_POST['flyer'];


$sql = "INSERT INTO events (name,description,typeID,companyID,date,timeStart,timeEnd,venueID,pricemale,pricefemale,memberdiscount,ticketstock,flyerName)
 VALUES (:name,:description,:typeID,:companyID,:date,:timeStart,:timeEnd,:venueID,:priceMale,:priceFemale,:discount,:stock,:flyer);";

 try {
    $STH = $GLOBALS["db"]->prepare($sql); 
	$STH->bindParam(":name", $name);
	$STH->bindParam(":description", $description);
	$STH->bindParam(":typeID", $typeID);
	$STH->bindParam(":companyID", $companyID);
	$STH->bindParam(":date", $date);
	$STH->bindParam(":timeStart", $timeStart);
	$STH->bindParam(":timeEnd", $timeEnd);
	$STH->bindParam(":venueID", $venueID);
	$STH->bindParam(":priceMale", $priceMale);
	$STH->bindParam(":priceFemale", $priceFemale);
	$STH->bindParam(":discount", $discount);
	$STH->bindParam(":stock", $stock);
	$STH->bindParam(":flyer", $flyer);
	$STH->execute();
	echo '<script language="javascript">';
	echo "window.alert('Event Succesfully Added!'); window.location.href='http://localhost/LondonStarClub/AdminPanel.php';";
	echo '</script>';
	die();
} catch(PDOException $ex) {
    echo "An Error occured!"; 
}
 


}

function deleteProduct(){

$id = $_POST['productID'];

$sql = "DELETE FROM products WHERE id=$id";

try {
    $STH = $GLOBALS["db"]->prepare($sql);  
	$STH->execute();
		echo '<script language="javascript">';
	echo "window.alert('Product Succesfully Deleted!'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	die();
} catch(PDOException $ex) {
    echo "An Error occured!"; 
}

}

function editProduct(){

$id = $_POST['productID'];
$name = $_POST['name'];
$manufacturer = $_POST['manufacturer'];
$description = $_POST['description'];
$category = $_POST['category'];
$price = $_POST['price'];
$specification = $_POST['specification'];

$price = preg_replace("/[^-0-9\.]/","",$price);


$sql = "UPDATE products SET name = :name,manufacturer = :manufacturer,description = :description,
categoryID = :category,price = :price,specification = :specification WHERE id = :id;";

 try {
    $STH = $GLOBALS["db"]->prepare($sql); 
	$STH->bindParam(":id",$id);
	$STH->bindParam(":name", $name);
	$STH->bindParam(":manufacturer",$manufacturer);
	$STH->bindParam(":description", $description);
	$STH->bindParam(":category", $category);
	$STH->bindParam(":price", $price);
	$STH->bindParam(":specification", $specification);
	$STH->execute();
	echo '<script language="javascript">';
	echo "window.alert('Product Succesfully Updated!'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	die();
} catch(PDOException $ex) {
    echo "An Error occured!"; 
}


}

function editPictures(){

$id = $_POST['productID'];

for ($x = 1; $x <= 5; $x++) {

if (isset($_POST['pictureLink'.$x]) && !empty($_POST['pictureLink'.$x])) {

$link = $_POST['pictureLink'.$x];

$sql = "INSERT INTO picturearrays (productID,pictureLink,pictureNum) VALUES (:id,:link,:number)";

 try {
    $STH = $GLOBALS["db"]->prepare($sql); 
	$STH->bindParam(":id",$id);
	$STH->bindParam(":link", $link);
	$STH->bindParam(":number",$x);
	$STH->execute();
} catch(PDOException $ex) {
    echo "An Error occured!"; 
} // END CATCH

} // END IF

} // END FOR

	echo '<script language="javascript">';
	echo "window.alert('Picture(s) Succesfully Updated!'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	die();

}

 ////////////////////////////////
/* Customer related functions */

function editCustomer(){


$id = $_POST['customerID'];
$Title = $_POST['customerTitle'];
$FName = $_POST['customerFName'];
$LName = $_POST['customerLName'];
$Email = $_POST['customerEmail'];
$Number = $_POST['customerNumber'];
$AddressLine1 = $_POST['customerAddressLine1'];
$AddressLine2 = $_POST['customerAddressLine2'];
$AddressCity = $_POST['customerAddressCity'];
$AddressPostal = $_POST['customerAddressPostal'];



$sql = "UPDATE customers SET title = :title,firstName = :FName,lastName = :LName,
email = :Email,phoneNumber = :Number,addressLine1 = :AddressLine1,addressLine2 = :AddressLine2,
addressCity = :AddressCity,addressPostal = :AddressPostal WHERE id = :id;";

 try {
    $STH = $GLOBALS["db"]->prepare($sql);  
	$STH->bindParam(":id",$id);
	$STH->bindParam(":title",$Title);
	$STH->bindParam(":FName", $FName);
	$STH->bindParam(":LName",$LName);
	$STH->bindParam(":Email", $Email);
	$STH->bindParam(":Number", $Number);
	$STH->bindParam(":AddressLine1", $AddressLine1);
	$STH->bindParam(":AddressLine2", $AddressLine2);
	$STH->bindParam(":AddressCity", $AddressCity);
	$STH->bindParam(":AddressPostal", $AddressPostal);
	$STH->execute();
	echo '<script language="javascript">';
	echo "window.alert('Customer Succesfully Updated!'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	die();
} catch(PDOException $ex) {
    echo "An Error occured!"; 
}

}

function deleteCustomer(){


$id = $_POST['customerID'];

$sql = "DELETE FROM customers WHERE id=$id";

try {
    $STH = $GLOBALS["db"]->prepare($sql);  
	$STH->execute();
	echo '<script language="javascript">';
	echo "window.alert('Customer Succesfully Deleted!'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	die();
} catch(PDOException $ex) {
    echo "An Error occured!"; 
}

}

function emailCustomer(){

$to = $_POST['customer-email'];
$msg = $_POST['message'];
$subject = $_POST['subject'];
$headers = "From: Admin@Dillips.com";

$msg = wordwrap($msg,70);


if (mail($to,$subject,$msg,$headers)){
	echo '<script language="javascript">';
	echo "window.alert('Email Succesfully Sent!'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	} else {
	echo '<script language="javascript">';
	echo "window.alert('ERROR! Contact Web Administrators'); window.location.href='http://localhost/test/AdminPanel.php';";
	echo '</script>';
	}

}

?>





















