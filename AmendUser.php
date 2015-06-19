<?php
require './includes/init.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Change User Details</title>
		<meta charset="utf-8" />
	<?php include 'includes/admincss.php'; ?>
	</head>
	<body>
		<div id="pagewrap">

			<div class =miniwrapper>

			<?php include 'includes/headerAmend.php'
				?>

				<?php include 'includes/navigation.php'
				?>

				<section id="content">

					<div class="table_content">

						<div class="scrollspy-example">
							<table>
								<td><h2>Change User Details</h2></td>
							</table>

							<?php

$AmendID=$_GET['id'];

$query ="SELECT * FROM users WHERE userID='$AmendID'";

$result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error());

$row = mysqli_fetch_assoc($result)

							?>

<table>
								<td><h4>Create a new user</h4></td>
								<form method="POST" action="UpdateUser.php" >
								<table>
									<input type="hidden" name="hideProductID" value="<?php echo $row["userID"]; ?>" />

									<tr>
										<td><label for="FirstName">First Name: </label></td>
										<td>
										<input type="text" name="FirstName" value="<?php echo $row["firstname"]; ?>" />
										</td>

									<tr>
										<td><label for="LastName">Last Name: </label></td>
										<td>
										<input type="text" name="LastName"  value="<?php echo $row["lastname"]; ?>" />
										</td>

									<tr>
										<td><label for="Password">Password: </label></td>
										<td>
										<input type="text" name="Password"  value="<?php echo $row["password"]; ?>" />
										</td>

									<tr>
										<td><label for="Email">Email: </label></td>
										<td>
										<input type="text" name="Email"  value="<?php echo $row["email"]; ?>" />
										</td>
									<tr>
										<td><label for="Mobile">Mobile: </label></td>
										<td>
										<input type="text" name="Mobile" value="<?php echo $row["MobileNumber"]; ?>" />
										</td>
									<tr>
										<td><label for="HouseNumber">House Number: </label></td>
										<td>
										<input type="text" name="HouseNumber" value="<?php echo $row["HouseNumber"]; ?>" />
										</td>
									<tr>
										<td><label for="StreetName">Street Name: </label></td>
										<td>
										<input type="text" name="StreetName" value="<?php echo $row["StreetName"]; ?>" />
										</td>
									<tr>
										<td><label for="Postcode">Postcode: </label></td>
										<td>
										<input type="text" name="Postcode"  value="<?php echo $row["Postcode"]; ?>" />
										</td>
									<tr>
										<td></td>
										<td>
										<input type="submit" value="Change Details" />
										</td>
								</form>
							</table>

						</div>

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