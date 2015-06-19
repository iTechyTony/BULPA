<?php
require'./includes/init.php';
	
	
	$search= $_GET['search'];
	$price=$_GET['price'];



$passID = $_GET['add'];
$query ="SELECT * FROM product WHERE id='$passID'";
$result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 
$row = mysqli_fetch_assoc($result);
$row["category"];



$page = 'products.php?category='.$row["category"];


if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT * FROM product WHERE id=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['quantity'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;

		}

	}
	header('Location:' . $page);
}

if (isset($_GET['remove'])) {
	$_SESSION['cart_' . (int)$_GET['remove']]--;
	
	header('Location:' . $page);
}

if (isset($_GET['delete'])) {
	$_SESSION['cart_' . (int) $_GET['delete']] = '0';
header('Location:' . $page);
}

function products() {
	$category = $_GET['category'];
	

	
	$get = mysqli_query($GLOBALS['connection'], "SELECT *FROM product WHERE category='$category' ");
	if (mysqli_num_rows($get) == 0) {
		$search= $_GET['search'];
	$price=$_GET['price'];	
			
		include './includes/connection.php';
		

		
		 $query ="SELECT * FROM product WHERE name LIKE '%$search%' OR description LIKE '%$search%'  order by price";
		 
  $result = mysqli_query($connection,$query) or exit ("Error in query: $query. ".mysqli_error()); 

while ($row = mysqli_fetch_assoc($result)){
			 echo '<table border="0">'.'<td style="width:100px" height="200">'
  . $row["name"]
  .'<td >'
.'<img src="images/dbImages/'.$row['imagename'].'" height="200" width="250">' 
  .'<td style="width:180px" >'
  . $row["description"]
    .'<td style="width:50px" >'
  . $row["quantity"]
  .'<td style="width:50px">'
  .'&pound'.$row["price"]
  .'<td style="width:50px" >'
  .'&pound'. $row["shipping"]
.'<td style="width:50px">'.'<a href="cart.php?add=' . $row['id'] . '">Add To Basket</a>'
.'</td>'.'</table>';}
		
	} else {
			
			
			
	while ($row = mysqli_fetch_assoc($get)) 
			 echo '<table border="0">'.'<td style="width:100px" height="200">'
  . $row["name"]
  .'<td >'
.'<img src="images/dbImages/'.$row['imagename'].'" height="200" width="250">'
  .'<td style="width:180px" >'
  . $row["description"]
    .'<td style="width:50px" >'
  . $row["quantity"]
  .'<td style="width:50px">'
  .'&pound'.$row["price"]
  .'<td style="width:50px" >'
  .'&pound'. $row["shipping"]
.'<td style="width:50px">'.'<a href="cart.php?add=' . $row['id'] . '">Add To Basket</a>'
.'</td>'.'</table>';
		
		}
	


}

function paypal_items(){
	$num='0';
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT id, name, price, shipping FROM product WHERE id=' . mysql_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$num++;
					echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
				    echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['name'].'">';
					echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
					echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
					echo '<input type="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
					echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
				}
			}

		}

	}
	
	
}

function cart() {
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT id, name, price FROM product WHERE id=' . mysql_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$sub = $get_row['price'] * $value;
					echo $get_row['name'] . ' x ' . $value . ' @ &pound;' . number_format($get_row['price'], 2) . ' = &pound;' . number_format($sub, 2) . '<a href="cart.php?remove=' . $id . '">[-]</a><a href="cart.php?add=' . $id . '">[+]</a><a href="cart.php?delete=' . $id . '">[Delete]</a><br />';
				}
			}
			$total = @$total + $sub;

		}

	}
	if (!isset($total)) {
		echo 'Your cart is empty!';
	} else {
		echo '<p>The total is &pound;' . number_format($total, 2).'</p>';

?>
<p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="antonydat@live.co.uk">
		<?php paypal_items(); ?>
		<input type="hidden" name="currency_code" value="GBP">
		<input type="hidden" name="amount" value="<?php echo $value; ?>">
		<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	</form>
</p>
<?php
}
}
?>