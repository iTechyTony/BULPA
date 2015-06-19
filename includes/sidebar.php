<section id="sidebar">

		<fieldset>
		<legend>
					Login/Sign Up
				</legend>
	<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		include './includes/loginform.php';
		if(isset($_SESSION['errors'])){
			foreach ($_SESSION['errors'] as $error){
				echo $error. '<br />';
			}
		}
	} else {
			echo '<a href="UserAmendAccount.php">My Account</a> | <a href="./login/logout.php">logout</a>';
			
			echo "<br>";
			
			include 'includes/connection.php';
			$email=$_SESSION['user'] ;
			$query = "SELECT firstname FROM users WHERE email='$email'";
			$result = mysqli_query($connection, $query);
			$row = mysqli_fetch_assoc($result);
			echo "<br>";
			echo 'Welcome  ' .$row["firstname"];
			echo "<br>";
			echo "<br>";
	cart();

		
	}
	?>
	
	</fieldset>
</section>