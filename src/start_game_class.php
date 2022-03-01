<?php
class StartGame
{
    public int $speedHero;
    public int $speedBeast;
    public int $heroLuck;
    public int $beastLuck;
    public string $titlePlayer1;
    public string $titlePlayer2;
    public int $activePlayer;

    function __construct($speedHero,  $speedBeast,  $heroLuck,  $beastLuck)
    {
        $this->speedHero = $speedHero;
        $this->speedBeast = $speedBeast;
        $this->heroLuck = $heroLuck;
        $this->beastLuck = $beastLuck;
        $this->whoStart($speedHero, $speedBeast, $heroLuck, $beastLuck);
    }

    public function whoStart($heroS, $bestS, $heroL, $beastL)
    {
        if ($heroS > $bestS) {
            $this->titlePlayer1 = "The Hero attacks ⚔";
            $this->titlePlayer2 = "The Beast defends 🛡";
            $this->activePlayer = 0;
        } else if ($bestS > $heroS) {
            $this->titlePlayer2 = "The Beast attacks ⚔";
            $this->titlePlayer1 = "The Hero defends 🛡";
            $this->activePlayer = 1;
        } else {
            if ($heroL > $beastL) {
                $this->titlePlayer1 = "The Hero attacks ⚔";
                $this->titlePlayer2 = "The Beast defends 🛡";
                $this->activePlayer = 0;
            } else {
                $this->titlePlayer2 = "The Beast attacks ⚔";
                $this->titlePlayer1 = "The Hero defends 🛡";
                $this->activePlayer = 1;
            }
        }
    }
}
