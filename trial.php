<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forms Creation</title>
    </head>
    <body>
    <h3>Over here!!, Already knew you were Visiting...</h3>
    <form action="process.php" method="POST">
        Username: <input type= "text" required name="uname" value="" />
        <br />
        Password: <input type= "password" required name="pwd" value="" />
        <br />
        Gender:  <input type="checkbox" name="Male" value="Male">Male
            <input type="checkbox" name="Female" value="Female">Female<br />

        <input type= "submit" name="submit" value="Register" />
    
    </form>
    <?php
// Set session variables
    if(isset($_POST['submit'])) {
        $_SESSION["name"] = $_POST['uname'];
        $_SESSION["pass"] = $_POST['pwd'];

}



?>
    </body>

</html>