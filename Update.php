<?php
require 'includes/connection.php';

$ID = $_POST['hideProductID'];

$FirstName= $_POST['FirstName'];

$LastName = $_POST['LastName'];

$Email = $_POST['Email'];

$Mobile = $_POST['Mobile'];

$HouseNumber= $_POST['HouseNumber'];

$StreetName= $_POST['StreetName'];

$Postcode=$_POST['Postcode'];

$query = "UPDATE users
SET
 firstname='$FirstName', 
lastname='$LastName',
 email='$Email',
HouseNumber='$HouseNumber',
StreetName='$StreetName',
MobileNumber='$Mobile',
 Postcode='$Postcode'
WHERE userID='$ID'";

$result = mysqli_query($connection, $query) or exit("Error in query: $query. " . mysqli_error());
$_SESSION['message']='Your Details has been successfully changed';

header('Location: index.php');



	
		?> 
