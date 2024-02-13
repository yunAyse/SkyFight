<?php
require_once 'config/autoload.php';
require_once 'config/db.php';
// the instance of HeroesManager should be created here.

$HeroManager = new HeroesManager($db); // new hero manager instance.
$selectedId = $_POST['id'];

$hero = $HeroManager->hydrateHeroId($HeroManager->find($selectedId)); // the selected hero's ID.
$FightManager = new FightsManager;  // new instance from the fightmanager.

$theMonster = $FightManager->createMonster();

$fightResults = $FightManager->fight($hero, $theMonster);

$monster = new Monster();

$monster->hit($hero);
$hero->hit($monster);


$HeroManager->updateHero($hero);
$HeroManager->deleteHero($hero);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fight</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body class="body-fight">
  
<section class="fight-section">
  <div class="heroes">

  </div>
  <div class="fight-description d-flex flex-column">
    <p> <?php foreach ($fightResults as $fightResult) {
  echo $fightResult ;
}?></p>
  </div>
</section>
<p>THE FIGHT IS OVER</p>
<form action="index.php">
  <input type="submit" value="Go Back">
</form>

<?php
die();
$HeroManager->updateHero($hero);

if ($hero->getHP() <= 0) {
  $HeroManager->deleteHero($hero);
}

?>

</body>
</html>