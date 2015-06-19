<?php
 //Set up the database access credentials
  $hostname = "localhost"; 
  $username = "root"; 
  $pword = ""; 
  $databaseName = "c3351134"; 

  // (1) Open the database connection  - exit with error message otherwise 

  $connection = mysqli_connect($hostname, $username, $pword, $databaseName) or exit("Unable to connect to database!");





?>