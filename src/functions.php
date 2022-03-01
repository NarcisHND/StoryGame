<?php

function checkIsEmpty($nameClass, $property, $item)
{
    if ($item == "") {
        return $nameClass->$property;
    } else {
        return $nameClass->$property = $item;
    }
}

function resetGame()
{
    $_SESSION['gamePlay'] = false;
    unset($_SESSION['nameHero']);
    unset($_SESSION['healtHero']);
    unset($_SESSION['strengthHero']);
    unset($_SESSION['defenceHero']);
    unset($_SESSION['speedHero']);
    unset($_SESSION['luckHero']);
    unset($_SESSION['rapidStrikeHero']);
    unset($_SESSION['magicShieldHero']);
    unset($_SESSION['nameBeast']);
    unset($_SESSION['healtBeast']);
    unset($_SESSION['strengthBeast']);
    unset($_SESSION['defenceBeast']);
    unset($_SESSION['speedBeast']);
    unset($_SESSION['luckBeast']);
    unset($_SESSION['activePlayer']);
    unset($_SESSION['titlePlayer1']);
    unset($_SESSION['titlePlayer2']);
    unset($_SESSION['resultRounds']);
}
