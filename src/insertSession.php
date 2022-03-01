<?php

class insertSession
{
    public function setStartGameSession()
    {
        $_SESSION['gamePlay'] = true;
        $_SESSION['theWinner'] = '';
        $_SESSION['fightMode'] = true;
        $_SESSION['gameRounds'] = 20;
        $_SESSION['resultRounds'] = [];
    }
    public function setSessionHero(
        $nameHero,
        $healtHero,
        $strengthHero,
        $defenceHero,
        $speedHero,
        $luckHero,
        $rapidStrikeHero,
        $magicShieldHero
    ) {
        $_SESSION['nameHero'] = $nameHero;
        $_SESSION['healtHero'] = $healtHero;
        $_SESSION['strengthHero'] = $strengthHero;
        $_SESSION['defenceHero'] = $defenceHero;
        $_SESSION['speedHero'] = $speedHero;
        $_SESSION['luckHero'] = $luckHero;
        $_SESSION['rapidStrikeHero'] = $rapidStrikeHero;
        $_SESSION['magicShieldHero'] = $magicShieldHero;
    }

    public function setSessionBeast(
        $nameBeast,
        $healtBeast,
        $strengthBeast,
        $defenceBeast,
        $speedBeast,
        $luckBeast
    ) {
        $_SESSION['nameBeast'] = $nameBeast;
        $_SESSION['healtBeast'] = $healtBeast;
        $_SESSION['strengthBeast'] = $strengthBeast;
        $_SESSION['defenceBeast'] = $defenceBeast;
        $_SESSION['speedBeast'] = $speedBeast;
        $_SESSION['luckBeast'] = $luckBeast;
    }

    public function setSessionPlayer($activePlayer, $titlePlayer1, $titlePlayer2)
    {
        // Set active Player and title:
        $_SESSION['activePlayer'] = $activePlayer;
        $_SESSION['titlePlayer1'] = $titlePlayer1;
        $_SESSION['titlePlayer2'] = $titlePlayer2;
    }

    public function setSessionForEditHero($nameHero, $healtHero, $strengthHero, $defenceHero, $speedHero, $luckHero)
    {
        $_SESSION['nameHero'] = $nameHero;
        $_SESSION['healtHero'] = $healtHero;
        $_SESSION['strengthHero'] = $strengthHero;
        $_SESSION['defenceHero'] = $defenceHero;
        $_SESSION['speedHero'] = $speedHero;
        $_SESSION['luckHero'] = $luckHero;
    }
}
