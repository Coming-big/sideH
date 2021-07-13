<?php 

echo "A Big Welcome CHAMP!!!";

/// connect to database
$conn = mysqli_connect('localhost', 'sam', 'samzy1', 'football');

//check connection
if(!$conn){
    echo 'error: ' . mysqli_connect_error();
}

?>