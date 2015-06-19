<?php
//initilise
error_reporting(0);
session_start();
$connection = mysqli_connect('localhost', 'username_goes_here', 'password_goes_here', 'database_name_goes_here') or die('There is a problem connecting to the database');