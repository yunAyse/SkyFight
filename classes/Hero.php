<?php

class Hero
{
  private $id;
  private string $name;
  private int $healthPoints = 100;

  public function __construct($heroName)
  {
    $this->name = $heroName;
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

  public function frapperUnMonstre()
  {
    
  }

  public function hit() {

  }
}
