<?php
echo "<h1>welcome to associative array in php</h1>";
$favcol = array(
    'khushi' => 'red',
    'lucky' => 'blue',
     'disha' => 'green'
);
foreach($favcol as $key => $color){
    echo "favriout color of $key is $color";
    echo "<br>";
}

echo "<h1>welcome to Multi-Dimensional array in php</h1>";
$mDA =  array(
    array(1,3,4,5),
    array(3,4,5,6),
    array(1,4,3,5)
);
for ($i=0; $i< count($mDA); $i++){
    for ($j=0; $j < count($mDA[$i]); $j++){
        echo $mDA[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>