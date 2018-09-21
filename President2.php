<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>President2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents 2</h2>
    <?php
    //President but not in array
    //President used with string tokins
        $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
        $thisPresident = strtok($presidents, ";");
        while ($thisPresident != NULL) {
            echo "$thisPresident<br>";
            $thisPresident = strtok(";");
        }
    ?>
</body>

</html>