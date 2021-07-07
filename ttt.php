<?php
session_start();


////if(isset($_POST['submit'])) {
/**$uname = $_POST['uname'];
$pass = $_POST['pwd'];

//store username in a session.
$_SESSION['uname'] = $uname;
$_SESSION['pwd'] = $pass;
}**/


//retrieve from session
////session_start();

//login page

///point1
/**$us= $_POST['uname'];
$pa= $_POST['pwd'];

if (isset($_SESSION['uname'])) {

	$n=$_SESSION['uname'];

	$p=$_SESSION['pwd'];

		if ($us === $n && $p === $pa) {

			echo 'Successfully registered ' . $n ;

		} else {
			echo 'Username or password is invalid';
		}

} else {
	echo 'Box cannot be empty';
}**/
////point1-end
?>



<!DOCTYPE html>
	<html>
		<title></title>
		<body>

		<h3>Successfully registered!!!</h3>
			
			<form action="process.php" method="POST">
			<input type= "submit" name="submit" value="Login" />
			</form>
		</body>
</html>