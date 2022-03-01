<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Abilities
{
    public string $name;
    public $health;
    public $strength;
    public $defence;
    public $speed;
    public $luck;

    function __construct($name, $health, $strength, $defence, $speed, $luck)
    {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;
    }

    public function setName(string $characterName): void
    {
        $this->name = $characterName;
    }

    public function setHealth(int $value1, int $value2): void
    {
        $this->health = rand($value1, $value2);
    }

    public function setStrength(int $value1, int $value2): void
    {
        $this->strength = rand($value1, $value2);
    }

    public function setDefence(int $value1, int $value2): void
    {
        $this->defence = rand($value1, $value2);
    }

    public function setSpeed(int $value1, int $value2): void
    {
        $this->speed = rand($value1, $value2);
    }

    public function setluck(int $value1, int $value2): void
    {
        $this->luck = rand($value1, $value2);
    }

    public function getName($name)
    {
        $this->name = $name;
    }

    public function getHealth($health)
    {
        $this->health = $health;
    }

    public function getStrength($strength)
    {
        $this->strength = $strength;
    }

    public function getDefence($defence)
    {
        $this->defence = $defence;
    }

    public function getSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getLuck($luck)
    {
        $this->luck = $luck;
    }
}
