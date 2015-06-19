<?php
//Make connection to database
include 'includes/connection.php';

//Gather id from $_GET[]
$ID=$_GET['id'];

//Construct DELETE query to remove record where WHERE id provided equals the id in the table
$query = "DELETE FROM product WHERE id='$ID'";

//run $query
$result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 
// check to see if any rows were affected

include 'adminLoginPage.php';
?>
