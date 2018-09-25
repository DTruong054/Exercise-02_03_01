<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>Compare Strings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Compare Strings</h2>
    <?php
    //The 2 strings being tested
        $firstString = "Geek2Geek";
        $secondString = "Geezer2Geek";
        if (!empty($firstString) && !empty($secondString)) {
            if ($firstString == $secondString) {
                //If both strings are the same...
                echo "<p>Both strings are the same</p>";
            } else {
                //If both strings are differnt...
                echo "<p>Both string have " . similar_text($firstString, $secondString) . " character(s) in common</p>";
                echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same</p>";
            }
            
        } else {
            //If string one or string 2 has no value...
            echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings can't be compared.</p>";
        }
    ?>
</body>

</html>