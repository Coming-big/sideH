<?php 
session_start();

	echo $_SESSION['fullname'] . "<br>";
	echo $_SESSION['password'] . "<br>";

	if(isset($_POST['login'])){ // check if login button is clicked 

		// passing data collected from user into a variables
		///$username = $_POST['username'];
		///$password = $_POST['password'];


		// preventing SQL Injection
		///$username = htmlspecialchars($username);
		///$password = htmlspecialchars($password);

		// Form Validation
		if(empty($_POST['username'])) {
			echo "Username field is required";
		}
		elseif(empty($_POST['password'])) {
			echo "Password field is required";
		}
		elseif(($_SESSION['fullname'] === $_POST['username']) && ($_SESSION['password'] === $_POST['password'])){
				echo "Login Successful" ;
			}
			else{
				echo "Invalid Details Given"  ;
			}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Page</title>
</head>
<body>

  <form action="" method="POST">
  			<h3>Login Page</h3>
		  	<label>Username:</label><br>
		  	<input type="username" name="username" value=""><br>
		  	<label>Password:</label><br>
		  	<input type="password" name="password" value=""><br><br>
		  	<input type="submit" name="login" value="Login">
		  	<p>Don't have an account? <a href="task2.php"> Create Account</a></p>
  </form>

</body>
</html>