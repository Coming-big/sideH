
<html>
    <head>
        <title>Forms Creation</title>
    </head>
    <body>
    <h3>Over here!!, Already knew you were Visiting...</h3>
    <form action="process.php" method="POST">
        Username: <input type= "text" required name="username" value="" />
        <br />
        Password: <input type= "password" required name="password" value="" />
        <br />
        Gender:  <input type="checkbox" name="Male" value="Male">Male
            <input type="checkbox" name="Female" value="Female">Female<br />

        <input type= "submit" name="register" value="Register" />
    </form>
    </body>
</html>