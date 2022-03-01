<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();

include "../src/init_class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 bg-light p-3">
        <div class="row text-center">

            <?php
            $_SESSION['gamePlay'] = false;
            include "../src/init_game.php";

            // Condition for view:
            if (($_SESSION['gamePlay'] && $_SESSION['gamePlay'] === true)) {
                $the_winner = $_SESSION['theWinner'];
                $gameRounds = $_SESSION['gameRounds'];
                $btn_Fight = $_SESSION['theWinner'] == '' ? 'Fight' : 'Restart Game';

                // View Hero:
                echo "<div class='col-4'>";
                echo "<h4>$titlePlayer1</h4>";
                echo "<img src='../img/hero.jpg' height='auto' width='50%' class='mb-2'>";
                echo "<br>";
                echo "<div>";
                echo "<h6>Name: $nameHero</h6>";
                echo "❤ Health: " . $healtHero . "<br>";
                echo "Strength: " . $strengthHero . "<br>";
                echo "Defence: " . $defenceHero . "<br>";
                echo "Speed: " . $speedHero . "<br>";
                echo "Luck: " . $luckHero . "%" . "<br>";
                echo "Rapid Strike: " . $rapidStrikeHero . "%" . "<br>";
                echo "Magic Shield: " . $magicShieldHero . "%" . "<br>";
                echo "</div>";
                echo "</div>";

                echo "<div class='col-4 mt-5'>
                            <h2 class='text-success'>$the_winner</h2>
                            <label class='d-block' for='roundsCount'>Rounds:</label>
                            <button class='btn btn-light border-danger' name='roundsCount'><h3>$gameRounds</h3></Button>
                            <form action='' method='POST' class='mt-3'>
                                <input class='btn btn-danger btn-lg' type='submit' value='$btn_Fight' name='submitFight'>
                            </form>
                            <form action='' method='POST' class='mt-3'>
                                 <input class='btn btn-danger btn-lg' type='submit' value='Reset' name='submitReset'>
                            </form>
                      </div>";

                // View Beast:
                echo "<div class='col-4'>";
                echo "<h4>$titlePlayer2</h4>";
                echo "<img src='../img/beast5.jpg' height='auto' width='45%' class='mb-2' >";
                echo "<br>";
                echo "<div>";
                echo "<h6>Name: $nameBeast</h6>";
                echo "❤ Health: " . $healtBeast . "<br>";
                echo "Strength: " . $strengthBeast . "<br>";
                echo "Defence: " . $defenceBeast . "<br>";
                echo "Speed: " . $speedBeast . "<br>";
                echo "Luck: " . $luckBeast . "%" . "<br>";
                echo "</div>";
                echo "</div>";

                if ($the_winner == '') {

                    include "editTable.php";
                }
            } else {
                // Start Button
                echo "<form action='' method='POST'>
                        <h2>Start the game!</h2>
                        <br>
                        <input class='btn btn-info btn-lg' type='submit' value='START' name='startGame'>
                      </form>";
            }

            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>