<?php
echo "<h1><i> Functions in php </i></h1><br>";
echo "function start working <br>";
function calAvgMarks($marks){
    $sum = 0;
    foreach($marks as $values){
       $sum+= $values;
    }
    $avg = $sum/5;
    echo $avg;
    echo "<br>";
}
$arr = array(99,94,95,96,100);
$result = calAvgMarks($arr);

function evenAndOdd($num){
    if($num%2 === 0){
        return $num."is Even"."<br>";
    }else{
        return $num."is Odd"."<br>";
    }
}
$result = evenAndOdd(100);
echo $result;
echo "Function over working";
?>