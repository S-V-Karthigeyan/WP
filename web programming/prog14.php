<?php
setcookie("user", "ABCD", time() + 86400, "/");  

echo "Cookie 'user' is set.<br><br>";

if (isset($_COOKIE["user"])) {
    echo "Cookie value: " . $_COOKIE["user"];
} else {
    echo "Cookie not set.";
}
?>
