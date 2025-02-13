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

$sql = "Select * from khushi";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo "Total no. of row in table is : $num";
echo "<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result)){
    echo "Hello,".$row['name']." "."Your email is"." ".$row['email'];
    echo "<br>";
    }
}


$sql0 = "DELETE FROM `khushi` WHERE email = 'hello@gmail.com'";
$result0 = mysqli_query($conn,$sql0);
$aff = mysqli_affected_rows($conn);

if($result0){
    echo "Data delete sucessfully";
    echo "<br>";
}else{
    echo "Data not delete sucessfully";
}

echo "Number of effected rows after delete is : $aff"."<br>";

$sql1 = "Select * from khushi";
$result1 = mysqli_query($conn,$sql1);

$num = mysqli_num_rows($result1);
echo "Total no. of row in table is : $num";
echo "<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result1)){
    echo "Hello,".$row['name']." "."Your email is"." ".$row['email'];
    echo "<br>";
    }
}

?>