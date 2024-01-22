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

  public function fight(Hero $hero, Monster $monster) {
    $fightDamages = [];
    
    while ($hero->getHP() > 0 && $monster->getHP() > 0) {
      $damageToHero = intval($monster->hit($hero)); //  a random number will be generated.

      if($damageToHero > 0) {
       $fightDamages[] = 'The Hero is ' . $damageToHero . ' HP away to die.' ;
      }

      if ($monster->getHP() < 0 or $hero->getHP() < 0) {
        break;
      }

      $damageToMonster = intval($monster->hit($hero));

      if ($damageToMonster > 0) {
        $fightDamages[] = 'The Monster is ' . $damageToMonster . ' HP away to die.';
      }

      if($hero->getHP() < 0 and $monster->getHP() < 0) {
        break;
      }
    } 
    
    return $fightDamages;
    
  }

 

}