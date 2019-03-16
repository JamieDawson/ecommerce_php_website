<?php
	require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
			<link rel="stylesheet" href="./style.css">
		</head>
		<body style="background-color:grey">
			<div class="main-wrapper">
				<center><h2>Registartion Form<h2>
					<img src="./assets/login.png" class="avatar"/>
				</center>
			<form action="register.php" method="post" class="my-form">
				<label><b>Username:</b></label></br>
				<input name="username" type="text" class="inputvalues" required/></br>
				<label><b>Password:</b></label></br>
				<input name="password"type="password" class="inputvalues" required/></br>
				<label><b>Confirm Password:</b></label></br>
				<input name="cpassword" type="password" class="inputvalues" required/></br>
				<input name="submit_btn" type="submit" class="signup-btn" value="Sign Up"/></br>
				<a href="./index.php"><input type="button" class="back-btn" value="Back"/></a>
			</form>
			<?php	
				if(isset($_POST['submit_btn']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
					$username = $_POST['username'];
					$password = $_POST['password'];
					$cpassword = $_POST['cpassword'];
					if ($password==$cpassword)
					{
						$query = "select * from UserInfo WHERE username='$username'";
						$query_run = mysqli_query($con,$query);

						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript"> alert("User exists") </script>';
						}
						else
						{
							$query = "insert into UserInfo values('$username', '$password')";
							$query_run = mysqli_query($con, $query);

							if ($query_run)
							{
								echo '<script type="text/javascript"> alert("User Registered Successfully") </script>';
							}
							else
							{
								echo '<script type="text/javascript"> alert("Error") </script>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript"> alert("passwords dont match!") </script>';
					}
				}
			?>
			</div>
		</body>
</html>
