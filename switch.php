<?php

$name = "pizza";

switch ($name) {
    case 'pizzoa':
        echo "This is real food";
        break;

        case 'pizza';
            echo "This is still pizza";
            break;
    
    default:
        print "It's argurablly a bad meal";
        break;
}

echo "<br>";
///////////

$age = "25";

switch ($age) {
    case 1:
        echo "1 is the number"; 
        break;

    case 15:
         echo "15 is the number"; 
         break;

    case 20:
        echo "20 is the number"; 
        break;
    
    default:
        echo "I need numbers..haha";
        break;
}

?>