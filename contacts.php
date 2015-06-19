<?php
require './includes/init.php';
require 'cart.php';
?>
<!DOCTYPE html>
<html>
 <head> 
      <title>Contacts</title> 
      <meta charset="utf-8" /> 
      <?php include 'includes/css_link.php'; ?>
   </head> 
	<body>
		<div id="pagewrap">
			
<div class =miniwrapper>

<?php include 'includes/header.php'?>
			
<?php include 'includes/navigation.php'?>			
		

			<section id="content">
				<div class="scrollspy-example">
					

	
	<div id="floatright">
		<img
   src="images/animation.gif"
   alt="Code" title="Binary"
/>
</div>
<address><br>
  <strong>Bulpa</strong><br>
  142 Byland Ave <br>North Yorkshire<br>
  York, YO31 9AY<br><br>
  <abbr title="Phone">Telephone:</abbr> (01904)-456789
</address>
 
<address>
  <strong>Tony Ampomah</strong><br><br>
  <a href="mailto:#">antonydat@gmail.com</a>
</address>
	
	<?php include'maps.php'?>	
	
			</section>

			
<div id="supersized"></div> 
			
			
			
<?php include'includes/footer.php'?>			
			</div>
		</div>

<?php include 'includes/js_link.php'; ?>

	</body>
</html>