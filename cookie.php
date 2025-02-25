<?php
/*A cookie is often used to identify a user.
 A cookie is a small file that the server embeds on the user's computer.
 Each time the same computer requests a page with a browser, it will send the cookie too. 
 With PHP, you can both create and retrieve cookie values.*/
$cookie_name = "user";
$cookie_value = "Isha";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
echo $_COOKIE[$cookie_name];
?>

</body>
</html>