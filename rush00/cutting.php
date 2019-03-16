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
		<?php include("modals.php"); ?>
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
		<table class="shop_grid">
			<TR>
				<TD>
					<div id="p5" class="container"  STYLE="background: white">
						<img class="image" src="./assets/camping-travel-knife-card_4460x4460.jpg" alt="Travel Knife Card"style="width:200px;height:200px;">
						<div class="middle">
							<div class="text">Travel Knife Card</br>$1000</div>
						</div>
					</div>
				</TD>
					<TD>
						<div id="p6" class="container"  STYLE="background: white">
							<img class="image" src="./assets/camping-pocket-chainsaw-flatlay_4460x4460.jpg" alt="Pocket Chainsaw"style="width:200px;height:200px;">
							<div class="middle">
								<div class="text">Pocket Chainsaw</br>$1000</div>
							</div>
						</div>
					</TD>
					</TR>
					<TR>
					<TD>
						<div id="p7" class="container"  STYLE="background: white">
							<img class="image" src="./assets/camping-pocket-multi-functional-tool-open_4460x4460.jpg" alt="Multi-tool"style="width:200px;height:200px;">
							<div class="middle">
								<div class="text">Multi-tool</br>$1000</div>
							</div>
						</div>
					</TD>
					<TD>
						<div id="p8" class="container"  STYLE="background: white">
							<img class="image" src="./assets/camping-pocket-knife_4460x4460.jpg" alt="Pocket Knife"style="width:200px;height:200px;">
							<div class="middle">
								<div class="text">Pocket Knife</br>$1000</div>
							</div>
						</div>
					</TD>
					</TR>
		</table>
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
