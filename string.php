<?php
//A string is a sequence of characters, like "Hello world!".

//strlen() function returns the length of the string

echo strlen("Hello World!" )."<br>";//outputs 12

//str_word_count() function counts the number of words in a string

echo str_word_count("Hello World!");//outputs 2
echo"<br>";
//strrev() function reverses a string

echo strrev("Hello world!");//outputs !dlrow olleH
echo"<br>";
/*strpos() function searches for a specific text within a string. If a match is found, the function
returns the character position of the first match. If no match is found, it will return false.*/
echo strpos("Hello World!", 'World!');//outputs 6
//The first character position in a string is 0 not 1

//str_replace function replaces some characters with some other characters in a string
echo str_replace("World", "Guys", "Hello World!");//outputs Hello Guys!
echo"<br>";
?>