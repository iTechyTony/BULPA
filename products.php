<?php
require './includes/init.php';
require './cart.php';


?>
<!DOCTYPE html>
<html>
 <head> 
      <title><?php echo $category ?></title> 
      <meta charset="utf-8" /> 
      <?php include 'includes/css_link.php'; ?>
   </head> 
	<body>
		<div id="pagewrap">
			
<div class =miniwrapper>

<?php include 'includes/header.php'?>
			
<?php include 'includes/navigation.php'?>			
		

			<section id="content">
	

    	<form style="float: right" action="products.php" method="get" >
<input type="hidden" name="price" value="price"/>
    <input style="width: 90px" id="search-term" name="search"></input>
    <button id="search-find" type="submit">Search</button>

</form>				
<div class="table_content">
    
       <table border="0"><th style="width:100px" "float:left">Name</th>
<th style="width:250px">Picture</th>
<th style="width:180px">Description</th>
<th  style="width:50px">Stock</th>
<th style="width:50px"><a href=products.php?price=price>Price</a></th>
<th  style="width:50px">Shipping</th>
</table>
         <div class="scrollspy-example">
         	
    <?php 
         	
products();




?>



         </div>
	
			</section>

			
<div id="supersized"></div> 
			
			
			
<?php include'includes/footer.php'?>			
			</div>
		</div>

<?php include 'includes/js_link.php'; ?>

	</body>
</html>