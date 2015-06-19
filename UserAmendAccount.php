<?php
require './includes/init.php';
require 'cart.php';
?>
<!DOCTYPE html>
<html>
 <head> 
      <title>Change Details</title> 
      <meta charset="utf-8" /> 
      <?php include './includes/css_link.php'; ?>
   </head> 
	<body>
		<div id="pagewrap">

			<div class =miniwrapper>

				<?php include 'includes/headerAmend.php'
				?>

				<?php include 'includes/navigation.php'
				?>

				<section id="content">
<?php 


$email=$_SESSION['user'];
$query ="SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 


 $row = mysqli_fetch_assoc($result)

?>
<table>
	<td><h2>Update My Details</h2></td>
<form method="POST" action="Update.php" >
	
	<input type="hidden" name="hideUserID" value="<?php echo $row["userID"]; ?>" /> 
				
			
		<input type="hidden" name="hideProductID" value="<?php echo $row["userID"]; ?>" />
	
	<tr>
										<td><label for="FirstName">First Name: </label></td>
										<td>
										<input type="text" name="FirstName" value="<?php echo $row["firstname"] ?>"/>
										</td>

									<tr>
										<td><label for="LastName">Last Name: </label></td>
										<td>
										<input type="text" name="LastName" value="<?php echo $row['lastname']; ?>"/>
										</td>

									<tr>
										<td><label for="Email">Email: </label></td>
										<td>
										<input type="text" name="Email" value="<?php echo $row['email']; ?>"/>
										</td>
									<tr>
										<td><label for="Mobile">Mobile: </label></td>
										<td>
										<input type="text" name="Mobile" value="<?php echo $row['MobileNumber']; ?>"/>
										</td>
									<tr>
										<td><label for="HouseNumber">House Number: </label></td>
										<td>
										<input type="text" name="HouseNumber" value="<?php echo $row['HouseNumber']; ?>"/>
										</td>
									<tr>
										<td><label for="StreetName">Street Name: </label></td>
										<td>
										<input type="text" name="StreetName" value="<?php echo $row['StreetName']; ?>"/>
										</td>
									<tr>
										<td><label for="Postcode">Postcode: </label></td>
										<td>
										<input type="text" name="Postcode"  value="<?php echo $row['Postcode']; ?>"/>
										</td>
									<tr>
										<td></td>
										<td>
										<input type="submit" value="Update" />
										</td>
								</form>
							</table>

							
<h2>Purchase History</h2>
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