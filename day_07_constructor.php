<?php
    echo "<h1>Welcome to constructor tutorial</h1>";

    class Coding{
        public $problem = "false";
        public $language = "java";
        public $score = 0;

        function __construct($p,$l){
            $this->problem = $p;
            $this->language = $l;
        }

        function getCodePoint(){
            if ($this->problem == "false" && $this->language == "java"){
                echo "Currently problem is not solve...<br>";
                $this->problem = "true";
                $this->score += 2;
            }
        }

        function display(){
            echo "Is problem solve? = ".$this->problem."<br>";
            echo "Now problem is solve...<br>";
            echo "Language is = ".$this->language."<br>";
            echo "Your Score is = ".$this->score."<br>";
        }
    }

    $Code= new Coding("false","java");
    $Code->getCodePoint();
    $Code->display();
?>