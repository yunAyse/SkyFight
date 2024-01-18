<?php
require_once './config/autoload.php';

// the heroes manager is where the CRUD is made.
class HeroesManager
{
  // private $isAlive;                    // to find if hero still exist in the list.
  private PDO $db;
  private array $heroes = [];

  
  public function __construct($db)
  {
    $this->db = $db;
  }

  // I add the hero object.
  public function add(Hero $hero): void
  {      // add a hero in the db

    // Insert the hero's name.
    $request = $this->db->prepare("INSERT INTO heroes (name) VALUES (:name)");
    $request->execute([
      'name' => $hero->getName(),             // the name coming from -> getName in the Hero class ?
    ]);

    $id = $this->db->lastInsertId();
    $hero->setId($id);
  }

  public function findAllAlive(): array
  {
    $request = $this->db->query("SELECT * FROM heroes WHERE health_point > 0");
    $aliveHeroes = $request->fetchAll();
    return $aliveHeroes;
  }

  public function hydrate(array $data)
  {
    foreach ($data as $aliveHero) {           // for each new Hero alive coming from the data array.
      $newHero = new Hero($aliveHero);        // create a new instance.
      $newHero->setId($aliveHero['id']);
      $this->heroes[] = $newHero;             // push into the array.
    }
    return $this->heroes;
  }
  public function getHeroes() :array {
    
    return $this->heroes;
  }
}



// public function selectHero () {         // select and choose a hero from the db/list.

// }

// public function stillAliveHeroes () {  // the list of the heroes still alive.

// }

// public function isHeroAlive () {        // to know if the hero is still alive.

// }