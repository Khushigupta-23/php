<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}else{
    echo "Connection successfully";
    echo "<br>";
   
}

$sql = "Select * from khushi WHERE email='@gmail.com'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "Hello, ".$row['name']." "."Your email is"." ".$row['email'];
        echo "<br>";
    }
}

?>