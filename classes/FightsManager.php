<?php 
// require_once './config/autoload.php';
// require_once './config/db.php';

class FightsManager { // store the data of the fight and do those functionalities 

  public function createMonster () {
    $monster = new Monster;
    $monster->setName('dragon');
    $monster->getHP();

    return $monster;
  }

  public function fight($hero,$monster) { 
    $fightDamages = [];
    
    while ($hero->getHP() > 0 and $monster->getHP() > 0) {
      $damageToHero = intval($monster->hit($hero));

      if($damageToHero > 0) {
       $fightDamages[] = 'The Monster inflict ' . $damageToHero . ' HP damage.' ;
      }

      if ($monster->getHP() < 0 or $hero->getHP() < 0) {
        break;
      }

      $damageToMonster = intval($hero->hit($monster));

      if ($damageToMonster > 0) {
        $fightDamages[] = 'The Hero inflict ' . $damageToMonster . ' HP damage.';
      }

      if($hero->getHP() < 0 or $monster->getHP() < 0) {
        break;
      }
     
    } 
    
    return $fightDamages;
    
  }
  
 

}