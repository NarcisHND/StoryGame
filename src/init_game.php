<?php
include "start_game_class.php";
include "fight_class.php";
include "functions.php";
include "../config/dataCharacters.php";
include "insertSession.php";

global $heroName;
global $heroHealth;
global $heroStrength;
global $heroDefence;
global $heroSpeed;
global $heroLuck;
global $heroRapidStrike;
global $heroMagicShield;
global $beastName;
global $beastHealth;
global $beastStrength;
global $beastDefence;
global $beastSpeed;
global $beastLuck;

$heroName = $hero['name'];
$heroHealth = $hero['health'];
$heroStrength = $hero['strength'];
$heroDefence = $hero['defence'];
$heroSpeed = $hero['speed'];
$heroLuck = $hero['luck'];
$heroRapidStrike = $hero['rapidStrike'];
$heroMagicShield = $hero['magicShield'];
$beastName = $beast['name'];
$beastHealth = $beast['health'];
$beastStrength = $beast['strength'];
$beastDefence = $beast['defence'];
$beastSpeed = $beast['speed'];
$beastLuck = $beast['luck'];

if (isset($_POST['startGame'])) {
    $insertSession = new insertSession();
    $insertSession->setStartGameSession();

    // Init variables
    $titlePlayer1 = "player 1";
    $titlePlayer2 = "player 2";

    // Init Class
    $julianHero = new Hero(
        $heroName,
        $heroHealth,
        $heroStrength,
        $heroDefence,
        $heroSpeed,
        $heroLuck,
        $heroRapidStrike,
        $heroMagicShield
    );

    $beast = new WildBeast(
        $beastName,
        $beastHealth,
        $beastStrength,
        $beastDefence,
        $beastSpeed,
        $beastLuck,
    );

    // Get Hero Properties:
    $nameHero = $julianHero->name;
    $healtHero = $julianHero->health;
    $strengthHero = $julianHero->strength;
    $defenceHero = $julianHero->defence;
    $speedHero = $julianHero->speed;
    $luckHero = $julianHero->luck;
    $rapidStrikeHero = $julianHero->rapidStrike;
    $magicShieldHero = $julianHero->magicShield;

    // Get Beast Properties:
    $nameBeast = $beast->name;
    $healtBeast = $beast->health;
    $strengthBeast = $beast->strength;
    $defenceBeast = $beast->defence;
    $speedBeast = $beast->speed;
    $luckBeast = $beast->luck;

    // Set who start the game:
    $startGameInit = new StartGame($speedHero, $speedBeast, $luckHero, $luckBeast);
    $titlePlayer1 = $startGameInit->titlePlayer1;
    $titlePlayer2 = $startGameInit->titlePlayer2;
    $activePlayer = $startGameInit->activePlayer;

    $insertSession->setSessionHero(
        $nameHero,
        $healtHero,
        $strengthHero,
        $defenceHero,
        $speedHero,
        $luckHero,
        $rapidStrikeHero,
        $magicShieldHero
    );

    $insertSession->setSessionBeast($nameBeast,  $healtBeast,  $strengthBeast, $defenceBeast, $speedBeast, $luckBeast);
    $insertSession->setSessionPlayer($activePlayer, $titlePlayer1, $titlePlayer2);
}

if (isset($_POST['submitHero'])) {
    $_SESSION['gamePlay'] = true;
    $insertSession = new insertSession();

    // Init Class
    $julianHero = new Hero(
        $heroName,
        $heroHealth,
        $heroStrength,
        $heroDefence,
        $heroSpeed,
        $heroLuck,
        $heroRapidStrike,
        $heroMagicShield
    );

    $beast = new WildBeast(
        $beastName,
        $beastHealth,
        $beastStrength,
        $beastDefence,
        $beastSpeed,
        $beastLuck,
    );

    $heroNameEdit = $_POST['nameHeroEdit'];
    $heroHelthEdit = $_POST['helthHeroEdit'];
    $heroStrengthEdit = $_POST['strengthHeroEdit'];
    $heroDefenceEdit = $_POST['defenceHeroEdit'];
    $heroSpeedEdit = $_POST['speedHeroEdit'];
    $heroLuckEdit = $_POST['luckHeroEdit'];

    $titlePlayer1 = $_SESSION['titlePlayer1'];
    $titlePlayer2 = $_SESSION['titlePlayer2'];

    // Set Properties:
    $nameHero = checkIsEmpty($julianHero, 'name',  $heroNameEdit);
    $healtHero =  checkIsEmpty($julianHero, 'health',  $heroHelthEdit);
    $strengthHero = checkIsEmpty($julianHero, 'strength',  $heroStrengthEdit);
    $defenceHero = checkIsEmpty($julianHero, 'defence',  $heroDefenceEdit);
    $speedHero = checkIsEmpty($julianHero, 'speed',  $heroSpeedEdit);
    $luckHero = checkIsEmpty($julianHero, 'luck',  $heroLuckEdit);
    $rapidStrikeHero = $julianHero->rapidStrike;
    $magicShieldHero = $julianHero->magicShield;

    $insertSession->setSessionForEditHero($nameHero, $healtHero, $strengthHero, $defenceHero, $speedHero, $luckHero);

    // Set Properties:
    $nameBeast = $_SESSION['nameBeast'];
    $healtBeast = $_SESSION['healtBeast'];
    $strengthBeast = $beast->strength;
    $defenceBeast = $beast->defence;
    $speedBeast = $beast->speed;
    $luckBeast = $beast->luck;
}

if (isset($_POST['submitFight'])) {
    $_SESSION['gamePlay'] = true;

    if ($_SESSION['fightMode'] === true) {
        $_SESSION['gameRounds'] = $_SESSION['gameRounds'] - 1;

        // Init Class
        $julianHero = new Hero(
            $heroName,
            $heroHealth,
            $heroStrength,
            $heroDefence,
            $heroSpeed,
            $heroLuck,
            $heroRapidStrike,
            $heroMagicShield
        );

        $beast = new WildBeast(
            $beastName,
            $beastHealth,
            $beastStrength,
            $beastDefence,
            $beastSpeed,
            $beastLuck,
        );

        $fightMode = new Fight();

        // Set Properties:
        $nameHero = $_SESSION['nameHero'];
        $healtHero =  $_SESSION['healtHero'];
        $strengthHero = $julianHero->strength;
        $defenceHero = $julianHero->defence;
        $speedHero = $julianHero->speed;
        $luckHero = $julianHero->luck;
        $rapidStrikeHero = $julianHero->rapidStrike;
        $magicShieldHero = $julianHero->magicShield;

        // Set Properties:
        $nameBeast = $_SESSION['nameBeast'];
        $healtBeast = $_SESSION['healtBeast'];
        $strengthBeast = $beast->strength;
        $defenceBeast = $beast->defence;
        $speedBeast = $beast->speed;
        $luckBeast = $beast->luck;

        $insertSession = new insertSession();
        $insertSession->setSessionHero(
            $nameHero,
            $healtHero,
            $strengthHero,
            $defenceHero,
            $speedHero,
            $luckHero,
            $rapidStrikeHero,
            $magicShieldHero
        );

        $insertSession->setSessionBeast($nameBeast,  $healtBeast,  $strengthBeast, $defenceBeast, $speedBeast, $luckBeast);

        $activePlayer =  $_SESSION['activePlayer'];
        $titlePlayer1 = $_SESSION['titlePlayer1'];
        $titlePlayer2 = $_SESSION['titlePlayer2'];
    } else {
        resetGame();
    }
}

if (isset($_POST['submitReset'])) {
    resetGame();
}
