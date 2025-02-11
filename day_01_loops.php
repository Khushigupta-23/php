<?php
// for loop
echo "<h1>For Loop</h1>";
for($i=0; $i<=5; $i++){
    echo $i;
    echo "<br>";
}

// while loop
echo "<h1>While Loop</h1>";
$i = 0;
while($i<=6){
    echo $i;
    echo "<br>";
    $i++;
}

//do while loop
echo "<h1>Do While Loop</h1>";
$i = 10;
do{
    echo $i;
    echo "<br>";
    $i--;
}while($i>0);

echo "<h1>ForEach Loop</h1>";
$arr = array("Khushi","Lucky","Disha","Deeksha");
foreach($arr as $values){
    echo $values;
    echo "<br>";
}
?>