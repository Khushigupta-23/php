<?php
    class Student{
        public static function info($r,$n,$m){
            echo "My name is {$n}, My roll no. is {$r}, and My Total Marks is {$m} ";
        }
    }
    Student::info(34,"khushi",99);
?>