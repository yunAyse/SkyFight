<?php

class Monster
{
  private $name;
  private $healthPoints = 100;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setHP($healthPoints)
  {
    $this->healthPoints = $healthPoints;
  }

  public function getHP()
  {
    return $this->healthPoints;
  }


  public function hit($hero): int
  {
    $damage = rand(5, 15);

    $HeroHp = $hero->getHP();
    $hero->setHP($HeroHp - $damage);
    var_dump($HeroHp);


    return $HeroHp;
  }
}
