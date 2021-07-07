<?php
session_start();
   
?>

<html>
    <head>
        <title>Kindly login Champ!</title>
    </head>
    <body>
    <h3>Over here, Kindly login Champ!</h3>
    <form action="process.php" method="POST"}>
    
        Username: <input type= "text" name="user" value="" />
        <br />
        Password: <input type= "password" name="word" value="" />
        <br />
        <input type= "submit" name="submit" value="Login"; />
        
        </form>
    </body>
<?php

if(isset($_POST['submit'])) {

    $usern = $_POST['user'];
    $pword = $_POST['word'];
 
   
 if($usern == $_SESSION["name"] && $pword == $_SESSION["pass"]) {
        echo "you the real champ";
     } else {
        echo "Username or Password Incorrect";
    }
}      
?>
</html>