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
// var_dump($fightResults);


// $HeroManager->update($hero);
$monster = new Monster();

$monster->hit($hero);
$hero->hit($monster);


$HeroManager->updateHero($hero);
$HeroManager->deleteHero($hero);

foreach ($fightResults as $fightResult) {
  echo $fightResult . '<br>';




}
?>

<form action="index.php">
  <input type="submit" value="Go Back">
</form>

<?php
$HeroManager->updateHero($hero);

if ($hero->getHP() <= 0) {
  $HeroManager->deleteHero($hero);
}

?>