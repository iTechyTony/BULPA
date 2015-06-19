<?php
require 'includes/connection.php';

$name= $_POST['name'];

$price = $_POST['price'];

$description = $_POST['description'];

$imagename= $_POST['imagename'];

$category = $_POST['category'];

$quantity = $_POST['quantity'];

$shipping = $_POST['shipping'];


$query = "INSERT INTO product  (id, name, price, description, imagename, category, quantity, shipping)VALUES
  ('','$name', '$price','$description','$imagename','$category','$quantity','$shipping')";
$result = mysqli_query($connection, $query) or exit("Error in query: $query. " . mysqli_error());

header('Location: adminLoginPage.php');
?>
