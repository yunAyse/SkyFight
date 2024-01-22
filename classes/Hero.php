<?php
require_once './config/autoload.php';

class Hero
{
  private $id;
  private $name;
  private int $healthPoints = 100;
  public function __construct(array $data)
  {
    $this->name = $data['name']; // I set the healthpoints to 100 as a default.
  } 

  // I get the name entered.
  public function getName() {
    return $this->name;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setHP($healthPoints) {
    $this->healthPoints = $healthPoints;
  }

  public function getHP() { // I get the ID from the construct method.
    return $this->healthPoints; 
  }

  public function generatedRandomDamage() {
    return rand(5,15);
  }

  public function hit($monster) {
  $damage = $monster->generatedRandomDamage();

  $monster->setHP($monster->getHP()-$damage);
  return $damage;
  }

}
