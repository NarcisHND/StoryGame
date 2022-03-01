<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class WildBeast extends Abilities
{
    public string $name;
    public $health;
    public $strength;
    public $defence;
    public $speed;
    public $luck;

    function __construct(
        string $name,
        $health,
        $strength,
        $defence,
        $speed,
        $luck
    ) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;

        $this->setName($name);
        $this->setHealth($health[0], $health[1]);
        $this->setStrength($strength[0], $strength[1]);
        $this->setDefence($defence[0], $defence[1]);
        $this->setSpeed($speed[0], $speed[1]);
        $this->setluck($luck[0], $luck[1]);
    }
}
