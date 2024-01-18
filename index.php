<?php 
// an interface for the user who can create a hero.
// the user can also choose a hero alive from a list.
require_once 'config/autoload.php';
require_once 'config/db.php';

// if the hero name is entered, create an instance of the Heroes Manager.
if (isset($_POST['heroName']) && !empty($_POST['heroName'])) {
  $newName = $_POST['heroName'];
  $HeroManager = new HeroesManager($db);
  
  // then with the instance of the new Hero,
  $hero = new Hero($newName);
  $hero->getName();
  var_dump($hero->getName());
  
  // I call the add method from the manager. (and as an argument, I add the hero instance [I guess])
  $HeroManager->add($hero);
  $hero->getId();   // get the new ID.
  var_dump($hero->getId());  
  
  $hero->getHP();   // get the HP of the hero.
  
  $AliveHero = $HeroManager->hydrate($HeroManager->findAllAlive());
  // var_dump($AliveHero);
  $AliveHeroes = $HeroManager->getHeroes();
  
  var_dump($AliveHeroes);
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkyFight</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="heroName" id="">
    <input type="submit" value="Lets Go">
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
