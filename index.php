<?php
require './includes/init.php';
require 'cart.php';
?>
<!DOCTYPE html>
<html>
   <head> 
      <title>Bulpa</title> 
      <meta charset="utf-8" /> 
      <?php include 'includes/css_link.php'; ?>
   </head> 
	<body>
		<div id="pagewrap">
			
<div class =miniwrapper>

<?php include 'includes/header.php'?>	
			
<?php include 'includes/navigation.php'?>			
		

			<section id="content">
				
	<?php include'includes/slideshow.php' ?>
	
			</section>

			
<div id="supersized"></div> 
			
			
<?php include'includes/footer.php'?>	

			</div>
			
		</div>

<?php include 'includes/js_link.php'; ?>

	</body>
</html>