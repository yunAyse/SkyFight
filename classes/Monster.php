<?php 

class Monster {
  private $name;
  private $healthPoints = 100;

  public function setName($name) {
    $this->name = $name;
  }

  public function getName()
 {
  return $this->name;
 }

 public function getHealtPoints () {
  return $this->healthPoints;
 }
}