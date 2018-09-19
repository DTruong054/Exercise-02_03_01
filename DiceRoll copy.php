<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>Dice Roll</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice roll</h2>
    <?php
        $faceNameSin = array("one", "two", "three", "four", "five", "six");
        $faceNamePlu = array("ones", "twos", "threes", "fours", "fives", "sixes");

        //Check for doubles
        function checkDoubles($die1, $die2)
        {
            global $faceNameSin;
            global $faceNamePlu;
            $returnValue = false;
            echo "Die 1: $die1<br>Die 2: $die2<br>";

            if ($die1 === $die2) {
                echo "The roll was double ", $faceNamePlu[$die1 - 1], ".<br>";
                $returnValue = true;
            }

            else {
                echo "The roll was a ", $faceNameSin[$die1 - 1], " and a ",$faceNameSin[$die2 - 1] ,".<br>";
                $returnValue = false;
            }
            return $returnValue;
        }

        //Display score
        function displayScore($score, $doubles)
        {
            if ($doubles) {
                if ($score === 2) {
                    echo "You hold snake eyes! <br>";
                }
                else if ($score === 12) {
                    echo "You hold boxcars! <br>";
                }
                else{
                if ($score === 3) {
                    echo "You hold loose deuce! <br>";
                }
                elseif ($score === 5) {
                    echo "You hold fevor five! <br>";
                }
                elseif ($score === 7) {
                    echo "You hold natural! <br>";
                }
                elseif ($score === 9) {
                    echo "You hold nina! <br>";
                }
                elseif ($score === 11) {
                    echo "You hold yo! <br>";
                } 
                else {
                    echo "Your roll has no nickname!<br>";
                }
            }
            }
        }
        $dice = array();
        $dice[] = rand(1, 6);
        $dice[1] = rand(1, 6);

        echo "<p>";
        $score = $dice[0] + $dice[1];
        echo "The total score for the roll was $score. <br>";
        $doubles = checkDoubles($dice[0], $dice[1]);
        displayScore($score, $doubles);
        echo "</p>";
    ?>
</body>

</html>