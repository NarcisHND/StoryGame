<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Hero extends Abilities
{
    public string $name;
    public $health;
    public $strength;
    public $defence;
    public $speed;
    public $luck;
    public $rapidStrike;
    public $magicShield;

    function __construct(
        string $name,
        array $health,
        array $strength,
        array $defence,
        array $speed,
        array $luck,
        array $rapidStrike,
        array $magicShield
    ) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;
        $this->rapidStrike = $rapidStrike;
        $this->magicShield = $magicShield;

        $this->getHealth($health);
        $this->setHealth($health[0], $health[1]);
        $this->setStrength($strength[0], $strength[1]);
        $this->setDefence($defence[0], $defence[1]);
        $this->setSpeed($speed[0], $speed[1]);
        $this->setluck($luck[0], $luck[1]);
        $this->setRapidStrike($rapidStrike[0], $rapidStrike[1]);
        $this->setMagicShield($magicShield[0], $magicShield[1]);
    }

    private function setRapidStrike(int $value1, int $value2)
    {
        $this->rapidStrike = rand($value1, $value2);
    }

    private function setMagicShield(int $value1, int $value2)
    {
        $this->magicShield = rand($value1, $value2);
    }

    public function getRapidStrike($rapidStrike)
    {
        $this->rapidStrike = $rapidStrike;
    }

    public function getMagicShield($magicShield)
    {
        $this->magicShield = $magicShield;
    }
}
