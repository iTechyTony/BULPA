<div class="scrollspy-example">
	<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		include './includes/adminForm.php';
		if(isset($_SESSION['errors'])){
			foreach ($_SESSION['errors'] as $error){
				echo $error. '<br />';
			}
		}
	} else {
$email=$_SESSION['user'] ;

include './protectpage.php';


		
	}
	?>
	 </div>