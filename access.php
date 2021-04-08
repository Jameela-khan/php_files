
<?php 

class Car {
  private $model;
 
  public function setModel($model)
  {
    $this -> model = $model;
  }
 
  public function hello()
  {
    return " I am a " .  $this -> model .  " <br />";
  }
}
class SportsCar extends Car {
}
$sportsCar1 = new SportsCar();

$sportsCar1 -> setModel('Mercedes Benz');
  
echo $sportsCar1 -> hello();
?>