<?php 
// require_once './config/autoload.php';
// require_once './config/db.php';

class FightsManager { // store the data of the fight and do those functionalities 

  public function createMonster () {
    $monster = new Monster;
    $monster->setName('dragon');
    $monster->getHealtPoints();

    return $monster;
  }

  public function fight() {

  }


}