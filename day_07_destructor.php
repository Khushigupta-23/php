<?php
    echo "<h1>Welcome to Destruct tutorial</h1>";

    class Student{
        public $name;
        public $roll;
        public $marks;

        function __construct($n,$r,$m){
            $this->name = $n;
            $this->roll = $r;
            $this->marks = $m;
        }

        function __destruct(){
            echo "<b>Name is : </b>".$this->name."<br>";
            echo "<b>Roll no. is : </b>".$this->roll."<br>";
            echo "<b>Marks is : </b>".$this->marks."<br>";
        }
    }

    $result = new Student("Khushi","34","91");
?>