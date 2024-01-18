<?php

// the heroes manager is where the CRUD is made.
class HeroesManager { 
  // private $isAlive; // to find if hero still exist in the list.
  private PDO $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

// dont used rn.
  public function add () {  // add a hero in the db
    
  } 

  public function selectHero () {  // select and choose a hero from the db/list.

  }

  public function stillAliveHeroes () {  // the list of the heroes still alive.

  }

  public function isHeroAlive () { // to know if the hero is still alive.

  }




}