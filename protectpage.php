<button style="float: right" onclick="location.href='login/logout.php'">
		Logout
	</button>
	<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		
		if(isset($_SESSION['errors'])){
			foreach ($_SESSION['errors'] as $error){
				echo $error. '<br />';
			}
		}
	} else {
			
			include 'includes/connection.php';
			$email=$_SESSION['user'] ;
			$query = "SELECT username FROM administrator WHERE username='$email'";
			$result = mysqli_query($connection, $query);
			$row = mysqli_fetch_assoc($result);
		
			echo '<table>'.'<td><h2>'.'Welcome  ' .$row["username"].'</h2></td></table>';
		


		
	}
	?>
							<table>
								<td><h2>Amend Or Delete Products</h2></td>
							</table>
							      <table border="0"><th style="width:100px" "float:left">Name</th>
<th style="width:250px">Picture</th>
<th style="width:180px">Description</th>
<th  style="width:50px">Stock</th>
<th style="width:50px"><a href=laptops.php?sort=LaptopPrice>Price</a></th>
<th  style="width:50px">Shipping</th>
<th  style="width:50px">Amend</th>
<th  style="width:50px">Delete</th>
</table>
<?php 

$query = "SELECT * FROM product";
$result = mysqli_query($connection, $query) or exit("Error in query: $query. " . mysqli_error());

while ($row = mysqli_fetch_assoc($result)) 
							
echo '<table border="0">'.'<td style="width:100px" height="200">'
  . $row["name"]
  .'<td >'
.'<img src="images/dbImages/'.$row['imagename'].'" height="200" width="250">'
  .'<td style="width:180px" >'
  . $row["description"]
    .'<td style="width:50px" >'
  . $row["quantity"]
  .'<td style="width:50px">'
  . $row["price"]
  .'<td style="width:50px" >'
  . $row["shipping"]
.'<td style="width:50px">'
. '<a href="AmendProduct.php?id=' . $row['id'] . '">Amend</a>'
.'<td style="width:50px">'
 . '<a href="Deleteproduct.php?id=' . $row['id'] . '">Delete</a>' 
.'</td>'.'</table>'. PHP_EOL;

?>
							<table>
							<td><h2>Insert a New Product</h2></td>
							</table>
							<form method="POST" action="InsertProduct.php" >
								<table>
									<input type="hidden" name="hideProductID" value="<?php echo $row["id"]; ?>" />

									<tr>
										<td><label for="name">Name: </label></td>
										<td>
										<input type="text" name="name" value="<?php echo $row["name"]; ?>"/>
										</td>
									</tr>
									<td><label for="price">Price: </label></td>
									<td>
									<input type="text" name="price" value="<?php echo $row['price']; ?>"/>
									</td>

									<tr>
										<td><label for="description">Description: </label></td>
										<td>
										<input type="text" name="description" value="<?php echo $row['description']; ?>"/>
										</td>

									<tr>
										<td><label for="imagename">Image Name: </label></td>
										<td>
										<input type="text" name="imagename" value="<?php echo $row['imagename']; ?>"/>
										</td>

									<tr>
										<td><label for="category">Category: </label></td>
										<td>
										<input type="text" name="category" value="<?php echo $row['category']; ?>"/>
										</td>

									<tr>
										<td><label for="stock">Stock: </label></td>
										<td>
										<input type="text" name="stock" value="<?php echo $row['quantity']; ?>"/>
										</td>

									<tr>
										<td><label for="shipping">Shipping: </label></td>
										<td>
										<input type="text" name="shipping" value="<?php echo $row['shipping']; ?>"/>
										</td>
									<tr>
										<td></td>

										<td>
										<input type="submit" value="Insert Product" />
										</td>
</form>
								</table>

	<td><h2>Change User Details Or Delete Users</h2></td>
							</table>				
<?php
    echo '<table border="0">
<th style="width:130px">firstname</th>
<th style="width:150px">lastname</th>
<th style="width:150px">Contact</th>
<th style="width:200px">Email</th>
<th style="width:100px">PostCode</th>
<th style="width:px">Amend</th>
<th style="width:px">Delete</th>
</table>';

$query ="SELECT * FROM users";
$result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 

while ($row = mysqli_fetch_assoc($result)){

  echo '<table border="0">'
  .'<td style="width:130px">'
  . $row["firstname"]
  .'<td style="width:150px">'
  . $row["lastname"]
.'<td style="width:150px">'
. $row["MobileNumber"]
.'<td style="width:200px">' 
. $row["email"]
.'<td style="width:100px">'
. $row["Postcode"]
.'<td style="width:px">'
. '<a href="AmendUser.php?id=' . $row['userID'] . '">Amend</a>' 
.'<td style="width:px">'
. '<a href="DeleteUser.php?id=' . $row['userID'] . '">Delete</a>' 
.'</td>'.'</table>'. PHP_EOL;
  
} 
	
?>
<?php
		if (!isset($_POST['FirstName']) && 
		!isset($_POST['LastName']) &&
		 !isset($_POST['Email']) && 
		 !isset($_POST['Mobile'])&& 
		 !isset($_POST['HouseNumber'])&& 
		 !isset($_POST['StreetName']) && 
		 !isset($_POST['Postcode'])
		
		
		) {
$_POST['FirstName']= NULL;
$_POST['LastName']= NULL;
$_POST['Email']= NULL;
$_POST['Mobile']= NULL;	
$_POST['HouseNumber']= NULL;
$_POST['StreetName']= NULL;
$_POST['Postcode']= NULL;
			}
		?>
<h2> Create New User </h2>
			
					<table width="500px" height="300px">
						<form method="POST" action="adminLoginPage.php">
													
							<tr>
										<td><label for="FirstName">First Name: </label></td>
										<td>
										<input type="text" name="FirstName" value="<?php echo $_POST['FirstName']; ?>"/>
										</td>

									<tr>
										<td><label for="LastName">Last Name: </label></td>
										<td>
										<input type="text" name="LastName" value="<?php echo $_POST['LastName']; ?>"/>
										</td>

									<tr>
										<td><label for="Password">Password: </label></td>
										<td>
										<input type="password" name="Password" value="<?php echo $_POST['Password']; ?>"/>
										</td>
										
								<tr>
										<td><label for="Password">Confirm Password: </label></td>
										<td>
										<input type="password" name="Password"  value="<?php echo $_POST['Password']; ?>"/>
										</td>

									<tr>
										<td><label for="Email">Email: </label></td>
										<td>
										<input type="text" name="Email" value="<?php echo $_POST['Email']; ?>"/>
										</td>
									<tr>
										<td><label for="Mobile">Mobile: </label></td>
										<td>
										<input type="text" name="Mobile" value="<?php echo $_POST['Mobile']; ?>"/>
										</td>
									<tr>
										<td><label for="HouseNumber">House Number: </label></td>
										<td>
										<input type="text" name="HouseNumber" value="<?php echo $_POST['HouseNumber']; ?>"/>
										</td>
									<tr>
										<td><label for="StreetName">Street Name: </label></td>
										<td>
										<input type="text" name="StreetName" value="<?php echo $_POST['StreetName']; ?>"/>
										</td>
									<tr>
										<td><label for="Postcode">Postcode: </label></td>
										<td>
										<input type="text" name="Postcode"  value="<?php echo $_POST['Postcode']; ?>"/>
										</td>
									<tr>
										<td></td>
										<td>
										<input type="submit" value="Create User" />
										</td>
								</form>
							</table>

							<?php
		if(isset($_POST['FirstName']) && 
		isset($_POST['LastName']) &&
		 isset($_POST['Email']) && 
		 isset($_POST['Password'])&& 
		 isset($_POST['Mobile'])&& 
		 isset($_POST['HouseNumber'])&& 
		 isset($_POST['StreetName']) && 
		 isset($_POST['Postcode'])
		 )
		
		  
		  {
		$firstname=$_POST['FirstName'];
		
		$lastname=$_POST['LastName'];
		
		$email=$_POST['Email'];
		
		$password=$_POST['Password'];
		
		$Mobile=$_POST['Mobile'];
		 $mlength = strlen($Mobile);
		$HouseNumber= $_POST['HouseNumber'];
		$hnlength = strlen($HouseNumber);
		$StreetName=$_POST['StreetName'];
		 $snlength = strlen($StreetName);
		$Postcode= $_POST['Postcode'];
			$pclength=strlen($Postcode);
		
		
		if (!empty($firstname) && 
		!empty($lastname)  && 
		!empty($email) && 
		!empty($password)&&
		!empty($Mobile) &&
		!empty($HouseNumber) &&
		!empty($StreetName) &&
		!empty($Postcode)) 
		{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					print '<br>';
					echo "Invalid Email";}
		
		 else if ((isset($password))) {
			$length = strlen($password);
			 $length_fname = strlen($firstname);
			 $length2_lname = strlen($lastname);
			if ($length > 6 && $length <= 15) {
				If (is_numeric($password)) {
					echo "Password cannot be a number";
					
				} elseif (is_numeric($firstname) || is_numeric($lastname) || $length_fname >20 || $length2_lname >20) {
					echo "First and Last Names cannot be numbers</br>";
					echo "First and Last Names cannot be more than 20 characters</br>";
					
				} elseif (!is_numeric($Mobile) || $mlength>12) {
					echo "Mobile number should be less than 13 numbers</br>";
					echo "Mobile number cannot be words</br>";
				}elseif(!is_numeric($HouseNumber ) || $hnlength>5){
					echo "House number can't be words";
				}elseif(is_numeric($StreetName ) || $snlength>25){
					echo "Name of your street cannot be numbers<br>";
					echo "Name of your street cannot be more than 25 characters";
				}elseif (is_numeric($Postcode) || strlen($pclength)>9) {
					echo "Postcode cannot be only numbers<br>";
					echo "Postcode cannot be only words<br>";
					echo "Postcode cannot be more than one character<br>";
				}
				
				else { 
							
				
				 


$password=md5($password);


 $query = "INSERT INTO users (userID, firstname, lastname, password, email, HouseNumber, StreetName, MobileNumber, Postcode) 
 VALUES ('','$firstname','$lastname','$password','$email','$HouseNumber','$StreetName','$Mobile','$Postcode')";
$result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 
  mysqli_close($connection); 
				
				header( 'Location: adminLoginPage.php' ) ;
				
				}
			} else {
				echo "Your password must be between 6 and 10 characters in length<br>";
			}
		} else if (!(isset($password))) {
			echo "Please enter a password. <br>";
		} else {
			echo "Please enter a password.<br>";
		
		
		}
		} 
		else {
				print "All Fields Required";
			}
		}
		 
		

	
		?> 