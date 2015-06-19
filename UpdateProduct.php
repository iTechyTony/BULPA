<?php

require 'includes/connection.php';

$ID = $_POST['hideProductID'];

$name= $_POST['name'];

$price = $_POST['price'];

$description = $_POST['description'];

$imagename= $_POST['imagename'];

$category = $_POST['category'];

$quantity = $_POST['quantity'];

$shipping = $_POST['shipping'];

$query = "UPDATE product
SET
 name='$name', 
price='$price',
 description='$description',
 imagename='$imagename',
 category='$category',
quantity='$quantity',
shipping='$shipping'

WHERE id='$ID'";

$result = mysqli_query($connection, $query) or exit("Error in query: $query. " . mysqli_error());

include 'adminLoginPage.php';
?>
