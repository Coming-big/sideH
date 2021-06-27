<?php

if (isset($_POST['submitEmail'])) {
    $email = $_POST['email'];

    echo "<h2>WELCOME ". $email ."</h2>"";
}

?>

<!DOCTYPE html>

<html>
    <form action="form.php" method="POST">
        <input name="email" placeholder="Enter your email">
        <button type="submit" name="submitEmail">Submit</button>
    </form>
<html