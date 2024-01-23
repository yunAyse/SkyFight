<?php
require_once 'config/autoload.php';
require_once 'config/db.php';
// the instance of HeroesManager should be created here.

$HeroManager = new HeroesManager($db); // new hero manager instance.
$selectedId = $_POST['id'];

$hero = $HeroManager->hydrateHeroId($HeroManager->find($selectedId)); // the selected hero's ID.
var_dump($hero);

$FightManager = new FightsManager;  // new instance from the fightmanager.

$theMonster = $FightManager->createMonster();
var_dump($theMonster);

$fightResults = $FightManager->fight($hero, $theMonster);
var_dump($fightResults);


// $HeroManager->update($hero);
$monster = new Monster();

$monster->hit($hero);
$hero->hit($monster);



