<?php
class Fruit{
  public $name;
  public $state;
  

  function set_name($n) {  // a public function (default)
    $this->name = $n;
    echo "Fruit name is : ".$this->name."<br>";
  }
  protected function color($n) { // a protected function
    $this->color = $n;
    echo "Fruit color is : ".$this->color."<br>";
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
    echo "Fruit weight is : ".$this->weight."<br>";
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>