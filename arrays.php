<?php

//////example of index array
$names = ["sola", "kpaul", "tope", "ade"];

$array = ["names", "6", "cars", "98"];


//////counting the functions in an array

echo count ($array);
echo "<br>";

$arrcount = count($names);

for ($i=0 ; $i < $arrcount ; $i++) {

    echo $names[$i]. " is a list in the array";
    echo "<br>";

}

///////associative arrays..

$associative = [
    "name" => "sola",
    "age" => "18",
    "location" => "Ekiki State",

];

/////looping asso arrays using 'foreach'

/////'person' here is the key

foreach ($associative as $person => $value) {
    echo $person . " = " . $value . "<br>";
}

/////multi-dimensiional array..

$multi = [
    ["Amos" , "Emmy" , "Tope" , "Debby"],
    ["20" , "21" , "22" , "14"],
    ["Ikeja" , "Ogun" , "Lisbon" , "Ekiti"],
];

////looping through this array;

for ($i=0; $i < 3 ; $i++) { 
    for ($x=0; $x < 4 ; $x++) { 
        echo $multi[$i][$x] . "<br>";
        
    }
    
}

$array1 = [ 1 , 9 , 5 , 3 , 8 , 10 , 67 , 57 ];
    echo $array1[6];
    echo "<br>";

sort: sort($array1);
print_r($array1);
        echo "<br>";
reverse: rsort($array1);
    print_r($array1);


?>