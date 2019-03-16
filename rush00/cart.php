
<?php
require 'dbconfig/config.php';
session_start();
?>
<html>
	<head>
		<title>Home</title>
		<script src="modals.js"></script>
		<link rel="stylesheet" type="text/css" href="menu.css">
	</head>

	<body>
		<div>
			<img src="./assets/Logo_top.png" style="width:500px;height:190px;">
		</div>
		</br>
	<ul>
			<a href="homepage.php">
				<li>
					Home
				</li>
			</a>
			<li>
			<form style="background:none;border:none;margin:0;padding:0;cursor: pointer; "action="./homepage.php" method="post">
			<input style="background:none;border:none;margin:0;padding:0;cursor: pointer;" name="logout" type="submit" value="Logout"/>
			</form>
<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:./index.php');
}
?>
			</li>
			<a href="bulbs.php">
				<li>
					Bulbs
				</li>
			</a>
			<a href="cart.php">
				<li>
					Cart
				</li>
			</a>
			<a href="cutting.php">
				<li>
					Cutting
				</li>
			</a>
		</ul>	
		</br>
<?php
$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
if (!empty($product_array)) 
{ 
	foreach($product_array as $key=>$value)
	{
?>
<div class="product-item">
	<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
	<div>
		 <strong><?php echo $product_array[$key]["name"]; ?></strong>
		</div>
	<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
	<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
	</form>
</div>

<?php 
	}
} 
?>
<HR/>
<div style="position:fixed;bottom:0px;left:0px;">
	<h3>Welcome
		<?php echo $_SESSION['username'] ?>
			</h3>
</div>
<div style="position:fixed;bottom:0px;right:0px;">
	<img src="./assets/Author_bottom_right.png" alt="Author"style="width:200px;height:200px;">
</div>
</body>
