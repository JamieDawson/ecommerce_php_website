
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
			<li>
			<form style="background:none;border:none;margin:0;padding:0;cursor: pointer; "action="./homepage.php" method="post">	
			<input style="background:none;border:none;margin:0;padding:0;cursor: pointer;" name="logout" type="submit" value="logout"/>
			</form>
			<?php
				if(isset($_POST['logout']))
				{
					session_destroy();
					header('location:./index.php');
				}
			?>
			</li>
			<a href="cart.php">
				<li>
					Cart;
				</li>
			</a>
		</ul>
		</br>

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
