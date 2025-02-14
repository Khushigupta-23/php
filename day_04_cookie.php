<?php
    echo "<h3 style='text-align:center;color:blue;'>Welcome to Cookies</h3>";

    // Syntax to set a cookie
    setcookie("category", "Books", time() + 86400, "/");
    echo "The cookie is set";
?>