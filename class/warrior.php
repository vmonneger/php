<?php
namespace Class\Fighter;


class Warrior {
  public $name = 'Warrior';
  public $hp = 100;
  public $strenght;
  public $defence;

  public function __construct() {
      $this->strenght = rand(25, 35);
      $this->defence = rand(10, 25);
  }

  public function attack($player2) {
    if ($this->strenght <= $player2->defence) {
      return 'Tu es trop faible pour l\'attaquer';
    } else {
      $player2Hp = $player2->hp - $this->strenght;
      return 'Le '  . $player2->name . ' lui reste ' . $player2Hp . ' pv';
    }
  }
}