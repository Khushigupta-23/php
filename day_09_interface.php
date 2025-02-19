<?php
Interface Choclate{
        public function choclateName($name);
        public function choclatePrise($cost);
    }

    class DairyMilk Implements Choclate{
        public function choclateName($name){
            echo "My most fav choclate is {$name} ";
        }
        public function choclatePrise($cost){
            echo ",it's prise is {$cost}<br>";
        }
    }

    class KitKat Implements Choclate{
        public function choclateName($name){
            echo "My 2nd fav choclate is {$name} ";
        }
        public function choclatePrise($cost){
            echo ",it's prise is {$cost}<br>";
        }
    }

    class FiveStar Implements Choclate{
        public function choclateName($name){
            echo "My 3rd fav choclate is {$name} ";
        }
        public function choclatePrise($cost){
            echo ",it's prise is {$cost}<br>";
        }
    }

    $Choclate = new DairyMilk;
    $Choclate->choclateName("<b><u>DairyMilk</u></b>");
    $Choclate->choclatePrise("<b><u>40</u></b>");
    echo "<br>";
    $Choclate = new KitKat;
    $Choclate->choclateName("<b><u>KitKat</u></b>");
    $Choclate->choclatePrise("<b><u>20</u></b>");
    echo "<br>";
    $Choclate = new FiveStar;
    $Choclate->choclateName("<b><u>FiveStar</u></b>");
    $Choclate->choclatePrise("<b><u>30</u></b>");
?>