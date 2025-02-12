<?php

echo "<h1><i>Welcome here we are ready to connect with database</i></h1><br>";

/*
ways to connect a MySql database
1. MySQLi extension
2. PDO
*/ 

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection 
$conn = mysqli_connect($servername,$username,$password);

// Create  DB
$sql = "CREATE DATABASE Khushi_Dbase";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Khushi_DB created successfully or alredy exists";
}else{
    echo "error creating database". mysqli_error($conn);
}


// if connection is fail
if (!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else{
echo "Successfully connect with the Database";
}



?>