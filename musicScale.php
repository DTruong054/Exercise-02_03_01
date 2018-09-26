<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>music scale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
<h2>Musical Scale</h2>
    <?php
    //Arrays
        $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
        $outputString = "The notes of the musical scale are: ";
        //For each structure
        foreach ($musicalScale as $curNote) {
            $outputString .= " " . $curNote;
        }
        echo "<p>$outputString</p>";
    ?>
    
    <h2>Formatted Text</h2>
    <?php
    //Echos
        $displayVariable = 9.876;
        echo "<pre>\n";
        echo "Unformatted text line 1. \r\n";
        echo "Unformatted text line 2. \r\n";
        echo "\$displayVariable = $displayVariable";
        echo "</pre>\n";
    ?>
</body>

</html>