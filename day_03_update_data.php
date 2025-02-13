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

$sql = "UPDATE khushi set gender = 'female' WHERE email = 'hello@gmail.com'; ";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows : $aff"."<br>";
if($result){
    echo "Sucessfully updated";
    echo "<br>";
}else{
    echo "Not Update";
    echo "<br>";
}
echo $result;

$sql1 = "Select * from khushi";
$result1 = mysqli_query($conn,$sql1);

$num = mysqli_num_rows($result1);
echo $num;
echo "<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result1)){
    // 1.
    // echo var_dump($row);
    // echo "<br>";

    // 2.
    echo "Hello,".$row['name']." "."Your gender is"." ".$row['gender'];
    echo "<br>";
    }
}



?>