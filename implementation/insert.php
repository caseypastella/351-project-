<?php 
	
$link = mysqli_connect("localhost", "tagalog", "tagalog123", "tagalog");

if ($link === false) {
	 die('could not connect"'.mysql.error());

}
mysqli_select_db($link, 'tagalog');




$businessname =  $_POST['businessname']);
$businessLocation = $_POST['businessLocation'];
$businessPhone = $_POST['businessPhone'];
$businessAddress =  $_POST['businessAddress'];
$contactName = $_POST['contactName'];


$sql="INSERT INTO Business (businessname, businessLocation, businessPhone, businessAddress, contactName) VALUES
('$businessname', '$businessLocation', '$businessPhone', '$businessAddress', '$contactName')";
	
if (mysqli_query($link, $sql)) {
	echo "Records added Successfully";
]
else {
	die('Error' .mysql_error);
}
 header("register.php"); 
