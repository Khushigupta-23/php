<?php
session_start();
echo "welcome ".$_SESSION['username']."! Your favorite category ".$_SESSION['favCat']." is here";
echo "<br>You can continue with it...Thankyou";
?>