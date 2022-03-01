<?php

class Fight
{
    function __construct()
    {

        $this->fight();
        $this->displayTheWinner();
    }

    public function fight()
    {
        if ($_SESSION['activePlayer'] === 0 && $_SESSION['healtHero'] > 0) {
            $_SESSION['titlePlayer1'] = "The Hero defends 🛡";
            $_SESSION['titlePlayer2'] = "The Beast attacks ⚔";
            $_SESSION['activePlayer'] = 1;

            if ($_SESSION['strengthHero'] > $_SESSION['defenceBeast']) {
                if ($_SESSION['rapidStrikeHero'] > 50) {
                    $Damage =  $_SESSION['strengthHero'] - $_SESSION['defenceBeast'];
                    $DmgTwice = $Damage * 2;
                    $_SESSION['healtBeast'] = $_SESSION['healtBeast'] - $DmgTwice;
                    array_push($_SESSION['resultRounds'], 'The Hero hits with Rapid Strike ' . " - Critical damage: -" . $DmgTwice);
                } else {
                    $Damage =  $_SESSION['strengthHero'] - $_SESSION['defenceBeast'];
                    $_SESSION['healtBeast'] = $_SESSION['healtBeast'] - $Damage;
                    array_push($_SESSION['resultRounds'], 'The Hero hits ' . " - Normal damage: -" . $Damage);
                }
            } else if ($_SESSION['strengthHero'] === $_SESSION['defenceBeast']) {
                if ($_SESSION['luckHero'] > $_SESSION['luckBeast']) {
                    $Damage =  $_SESSION['luckHero'] - $_SESSION['luckBeast'];
                    $_SESSION['healtBeast'] = $_SESSION['healtBeast'] - $Damage;
                    array_push($_SESSION['resultRounds'], 'The Hero hits with luck ' . " - Normal damage: -" . $Damage);
                } else {
                    array_push($_SESSION['resultRounds'], 'The Hero misses ' . " - Beast is lucky");
                }
            }
        } else if ($_SESSION['activePlayer'] === 1 && $_SESSION['healtBeast'] > 0) {
            $_SESSION['titlePlayer2'] = "The Beast defends 🛡";
            $_SESSION['titlePlayer1'] = "The Hero attacks ⚔";
            $_SESSION['activePlayer'] = 0;

            if ($_SESSION['strengthBeast'] > $_SESSION['defenceHero']) {
                if ($_SESSION['magicShieldHero'] > 50) {
                    $Damage =  $_SESSION['strengthBeast'] - $_SESSION['defenceHero'];
                    $DamageShield = round($Damage / 2);
                    $_SESSION['healtHero'] = $_SESSION['healtHero'] - $DamageShield;
                    array_push($_SESSION['resultRounds'], 'The hero defends with the magic shield ' . " - Low damage: -" . $DamageShield);
                } else {
                    $Damage =  $_SESSION['strengthBeast'] - $_SESSION['defenceHero'];
                    $_SESSION['healtHero'] = $_SESSION['healtHero'] - $Damage;
                    array_push($_SESSION['resultRounds'], 'The Beasts hits ' . " - Normal damage: -" . $Damage);
                }
            } else if ($_SESSION['strengthBeast'] === $_SESSION['defenceHero']) {
                if ($_SESSION['luckBeast'] > $_SESSION['luckHero']) {
                    $Damage =  $_SESSION['luckBeast'] - $_SESSION['luckHero'];
                    $_SESSION['healtHero'] = $_SESSION['healtHero'] - $Damage;
                    array_push($_SESSION['resultRounds'], 'The Beast hits with luck ' . " - Normal damage: -" . $Damage);
                } else {
                    array_push($_SESSION['resultRounds'], 'The Beast misses ' . " - Hero is lucky");
                }
            }
        }
    }
    public function displayTheWinner()
    {
        if ($_SESSION['healtHero'] <= 0) {
            $_SESSION['titlePlayer1'] = "The Hero is dead! ☠";
            $_SESSION['titlePlayer2'] = "The Beast is bleeding! 😵";
            $_SESSION['healtHero'] = 0;
            $_SESSION['theWinner'] = "The Beast is the winner! 🎌";
            $_SESSION['fightMode'] = false;
        } else if ($_SESSION['healtBeast'] <= 0) {
            $_SESSION['titlePlayer2']  = "The Beast is dead! ☠";
            $_SESSION['titlePlayer1'] = "The Hero is bleeding! 😵";
            $_SESSION['healtBeast'] = 0;
            $_SESSION['theWinner'] = "The Hero is the winner! 🎌";
            $_SESSION['fightMode'] = false;
        } else if ($_SESSION['gameRounds'] <= 0) {
            $_SESSION['theWinner'] = "It's draw!";
            $_SESSION['titlePlayer1'] = "The Hero escaped! 🏃";
            $_SESSION['titlePlayer2'] = "The Beast ran away! 🏃";
            $_SESSION['fightMode'] = false;
        }
    }
}
