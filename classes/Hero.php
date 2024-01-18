<?php

class Hero
{
  private $id;
  private string $name;
  private int $healthPoints;

  public function __construct($heroName)
  {
    $this->name = $heroName;
    $this->healthPoints = 100; // I set the healthpoints to 100 as default.
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

  public function getHP () { // I get the ID from the construct method.
    return $this->healthPoints; 
  }

  public function frapperUnMonstre()
  {
    
  }

  public function hit() {

  }
}
