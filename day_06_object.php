<?php
    echo "<h1>Let's Understand Objects in Php</h1><br>";

    class Car{
        public $model;
        public $color;
        public $speed = 0;

        function setDetails($m , $c){
            $this->model = $m;
            $this->color = $c;

            echo "Model of car is : ".$this->model."<br>";
            echo "Color of car is : ".$this->color."<br>";
        }
        
        function accelerate(){
            echo "Before start the car, the car speed is : ".$this->speed."<br>";
            echo "Car is starting...<br>";
            if($this->speed == 0){
                $this->speed +=10;
            }
            echo "After sometime the car speed is : ".$this->speed."km/h<br>";
        }
    }

    // Creating Object
    $myCar = new Car();
    $myCar->setDetails("Swift","white");
    $myCar->accelerate();
?>