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
$firstname=$_POST['FirstName'];
		
		$lastname=$_POST['LastName'];
		
		$email=$_POST['Email'];
		
	
		
		$Mobile=$_POST['Mobile'];
		 
		$HouseNumber= $_POST['HouseNumber'];
	
		$StreetName=$_POST['StreetName'];
	
		$Postcode= $_POST['Postcode'];
	

echo "<h2>You've successfully signed up on Bulpa <br> Please use your Email and Password to login<br></h2>";
echo $firstname .' '.$lastname .'<br>'.$email.'<br>'. $Mobile.' <br>'. $HouseNumber.' '.$StreetName.' <br>'.$Postcode ; 
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