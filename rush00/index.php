<?php
	session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
			<link rel="stylesheet" href="./style.css">
		</head>
		<body style="background-color:grey">
			<div class="main-wrapper">
				<center><h2>Login Form<h2>
					<img src="./assets/login.png" class="avatar"/>
				</center>
			<form action="index.php" method="post" class="my-form">
				<label><b>Username:</b></label></br>
				<input name="username" type="text" class="inputvalues" required/></br>
				<label><b>Password:</b></label></br>
				<input name="password"type="password" class="inputvalues"/></br>
				<input name="login" type="submit" class="login-btn" value="Login" required/></br>
				<a href="./register.php"><input type="button" class="register-btn" value="Register"/></a>
			</form>
			<?php
				if (isset($_POST['login']))
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					$query="select * from UserInfo WHERE username='$username' AND password='$password'";
					$query_run = mysqli_query($con,$query);
					if (mysqli_num_rows($query_run) > 0)
					{
						$_SESSION['username']=$username;
						header('location:./homepage.php');
					}
					else
					{
						echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
					}
				}
			?>
			</div>
		</body>
</html>
