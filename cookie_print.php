<?php
// Set two cookies
setcookie("username", "john_doe", time() + 5); // Expires in 1 hour
setcookie("language", "en", time() + 86400);     // Expires in 1 day

// Print the contents of $_COOKIE
print_r($_COOKIE['language']);
?>