<?php
require_once 'config/autoload.php';
require_once 'config/db.php';
// the instance of HeroesManager should be created here.

$HeroManager = new HeroesManager($db); // new hero manager instance.
$selectedId = $_POST['id'];

$findHero = $HeroManager->hydrateHeroId($HeroManager->find($selectedId)); // the selected hero's ID.
var_dump($findHero);


$FightManager = new FightsManager;  // new instance from the fightmanager.

$theMonster = $FightManager->createMonster();
var_dump($theMonster);
$FightManager->fight($findHero, $theMonster);

