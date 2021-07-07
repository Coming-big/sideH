<?php 

session_start();

	if(isset($_POST['submit'])){
		// passing data collected from user into a variables
		$fullname = $_POST['usname'];
		$password = $_POST['pswd'];

		// preventing SQL Injection
		$fullname = htmlspecialchars($fullname);
		$password = htmlspecialchars($password);

		// Form Validation
		if(empty($fullname)){
			echo "Username field is required";
		}
		elseif (empty($password)) {
			echo "Password field is required";
		}
		else{

			echo "Account has been created successfully";
		}
// Storing the data's collected from user into a session
$_SESSION['fullname'] = $fullname;
$_SESSION['password'] = $password;
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

  <form action="process.php" method="POST">
        Username: <input type= "text" required name="usname" value="" />
        <br />
        Password: <input type= "password" required name="pswd" value="" />
        <br />
        Gender:  <input type="checkbox" name="Male" value="Male">Male
            <input type="checkbox" name="Female" value="Female">Female<br />

        <input type= "submit" name="submit" value="Register" />
    
    </form>

</body>
</html>