<?php
/*The following example creates a small script that checks whether cookies are enabled. 
First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable*/
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>