<?php
// Session is used to manage information across difference pages
echo "<h1 style='text-align:center;color:darkblue;'>Welcome To Session</h1>";
// Verify the user login info 
session_start();
$_SESSION['username'] = "Khushi";
$_SESSION['favCat'] = "Books";
// favCat = fav category
echo "<h5>We have saved your session</h5>";
?>