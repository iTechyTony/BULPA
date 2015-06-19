<?php
require './includes/init.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Amend Product</title>
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
								<td><h2>Amend Product</h2></td>
							</table>

							<?php

$AmendID=$_GET['id'];

$query ="SELECT * FROM product WHERE id='$AmendID'";

$result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error());

$row = mysqli_fetch_assoc($result)

							?>

							<form method="POST" action="UpdateProduct.php" >
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
										<input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"/>
										</td>

									<tr>
										<td><label for="shipping">Shipping: </label></td>
										<td>
										<input type="text" name="shipping" value="<?php echo $row['shipping']; ?>"/>
										</td>
									<tr>
										<td></td>

										<td>
										<input type="submit" value="Amend Product" />
										</td>

								</table>

						</div>

				</section>

				<div id="supersized"></div>

				<?php include'includes/footer.php'
				?>
			</div>
		</div>

		<?php
	include 'includes/js_link.php';
		?>
	</body>
</html>