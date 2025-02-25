<?php
$age = [
    "bill" => 25,
    "steve" => 28,
    "elon" => 22,
];

foreach ($age as $value) {
    echo $value . "<br>";
} //outputs only values

foreach ($age as $key => $value) {
    echo "$key = $value" . "<br>";
}
?>
