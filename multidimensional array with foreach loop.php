<?php
// Multidimensional array
$superheroes = [
    "spider-man" => [
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ],
    "super-man" => [
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ],
    "iron-man" => [
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    ]
    ];
 
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo "<b><br>";
    echo  $keys[$i] . "<b><br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
?>