<?php

echo "<h1><i>Welcome here we are ready to connect with database</i></h1><br>";

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "DB_Khushi";

// Create a connection 
$conn = mysqli_connect($servername,$username,$password,$database);
echo "error creating database". mysqli_error($conn);

// if connection is fail
if (!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else{
echo "Successfully connect with the Database";
}

// Create a table in the DB
$sql = "CREATE TABLE `db_khushi`.`trip` (`no` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(10) NOT NULL , `loc` TEXT NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`no`)) ";
$result = mysqli_query($conn, $sql);

// Check for table creatrion success
if($result){
    echo "Khushi_DB created successfully or alredy exists";
}else{
    echo "error creating database". mysqli_error($conn);
}

?>