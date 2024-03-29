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
  $hero = new Hero([
    "name" => $newName,
  ]);
  $hero->getName();

  // I call the add method from the manager. (and as an argument, I add the hero instance [I guess])
  $HeroManager->add($hero);
  $hero->getId();   // get the new ID.
  // var_dump($hero->getId());  

  $hero->getHP();   // get the HP of the hero.
  $AliveHero = $HeroManager->hydrate($HeroManager->findAllAlive());

  $AliveHeroes = $HeroManager->getHeroes();
} else {

  $HeroManager = new HeroesManager($db);
  $AliveHero = $HeroManager->hydrate($HeroManager->findAllAlive());

  $AliveHeroes = $HeroManager->getHeroes();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkyFight</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="body-combat">
  <section class="container-md col-12 first-section__background" style="background-repeat: no-repeat; background-size: 100%;">
    <div class="section-hero col-6">
      <div class="hero_form" style="background-color: #252229; width:400px; height: 180px; padding: 16px; border-radius: 24px">
        <form action="" method="POST">
          <input type="text" name="heroName" id="" class="input__hero-name">
          <input type="submit" value="Create your Hero" class="p-2 mt-3 border-0 bg-light rounded p-2">
        </form>
      </div>


      <!-- CARD  -->
      <div class="carousel-inner d-flex gap-4 col-6" style="flex-wrap: wrap;">
        <?php foreach ($AliveHeroes as $TheHero) { ?>
          <div class="card p-3 justify-content-center d-flex flex-column" style="width:200px; height: 330px">
            <img src="img/chara/samurai-1.png" class="d-block w-100" alt="...">
            <div class="description-hero">
              <h5><?php echo 'Hero : ' . $TheHero->getName() ?></h5>
              <p><?php echo 'HP : ' . $TheHero->getHP() ?></p>
            </div>
            <div class="">
              <form action="./fight.php" method="post">
                <input type="hidden" name="id" value="<?php echo $TheHero->getId() ?>">
                <button type="submit" style="border: 1px solid grey;">FIGHT</button>
              </form>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>

  </section>

</body>

</html>