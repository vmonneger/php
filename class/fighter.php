<?php
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

class Mage {
  public $name = 'Mage';
  public $hp = 100;
  public $strenght;
  public $defence ;

  public function __construct() {
      $this->strenght = rand(15, 25);
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
  public function spell($player2) {
      $spell = rand(3, 8);
      $player2Defence = $player2->defence - $spell;
      return 'Tu as baissé sa défense de ' . $spell . ', il lui reste ' . $player2Defence . ' de défense';
  }
}

$warrior = new Warrior;
$mage = new Mage;
// var_dump(
//   $warrior,
//   $mage,
//   $mage->attack($warrior),
//   $mage->spell($warrior)
// );

?>