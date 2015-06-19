<?php
require './includes/init.php';
?>
<!DOCTYPE html>
<html>
 <head> 
      <title>Registration</title> 
      <meta charset="utf-8" /> 
      <?php include 'includes/css_link.php'; ?>
   </head> 
	<body>
		<div id="pagewrap">

			<div class =miniwrapper>

				<?php include 'includes/header.php'
				?>

				<?php include 'includes/navigation.php'
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
<h2> New Customers Please Register </h2>
				<section id="content">
					<table width="500px" height="300px">
						<form method="POST" action="./registration.php">
													
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
										<input type="submit" value="Register" />
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
				
				header( 'Location: confirm_reg.php' ) ;
				
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
				</section>

				<div id="supersized"></div>

				<?php include'includes/footer.php'
				?>
			</div>
		</div>

		<?php include 'includes/js_link.php';
		?>
	</body>
</html>