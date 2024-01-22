<?php 

class Monster {
  private $id;
  private $name;
  private $healthPoints = 100;

  public function setName($name) {
    $this->name = $name;
  }

  public function getName()
 {
  return $this->name;
 }


 public function getHP () {
  return $this->healthPoints;
 }

 public function getId() {
  return $this->id;
 }
 
  public function generatedRandomDamage() {
   return rand(5,15);
 }

 public function hit($hero) {
  $damage = $hero->generatedRandomDamage();

  $hero->setHP($hero->getHP() - $damage);
  return $damage;
  var_dump($damage);
 }



}