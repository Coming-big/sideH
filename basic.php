<html>
    <head>
        <title>Basic</title>
    </head>
    <body>
        <?php
            $name = "Hello World" ;
            echo $name;
        ?>
    </body>
</html>

<legend>
  		<fieldset>
  			<h3>Registration Page</h3>
  			<label>Full Name:</label><br>
		  	<input type="text" name="fullname"><br>
		  	<label>Email Address:</label><br>
		  	<input type="email" name="email"><br>
		  	<label>Password:</label><br>
		  	<input type="password" name="password"><br><br>
		  	<input type="submit" name="register" value="Submit">
		  	<p>Already have an account? <a href="index.php">Login</a></p>
		</fieldset>
  	</legend>