<?php

if(isset($_POST['submit'])){
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['leather'];
}


?>

<!DOCTYPE html>
<hyml>


<section class="container grey-text">
    <h4 class="center">Add a shoe</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your email:</label>
        <input type="text" name="email">
        <label>Shoe title:</label>
        <input type="text" name="title">
        <label>Shoe leather (comma seperated):</label>
        <input type="text" name="leather">
        <div class="center">
            <input type="submit" name="submit" valeu="submit" class="btn brand z-depth-0">
        </div>



</section>


</html>

<?php include('templates/header.php'); ?>