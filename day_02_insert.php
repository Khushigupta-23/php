<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "DB_Khushi";

// Create a connection 
$conn = mysqli_connect($servername,$username,$password,$database);

// if connection is fail
if (!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else{
echo "Successfully connect with the Database<br>";
}

// SQL query to be executed
$sql = "INSERT INTO `trip`(`name`, `loc`, `date`) VALUES ('Disha','Bhopal','2024-12-24');";
$result = mysqli_query($conn , $sql);
// Add a new trip to the trip table in the Database
if($result){
    echo "<strong>The record has been inserted successfully</strong><br>";
}else{
    echo "The record has not been inserted successfully because of this error" . mysqli_error($conn);
}

?>
