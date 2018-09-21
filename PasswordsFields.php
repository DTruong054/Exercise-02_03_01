<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>Passwords</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passwords</h2>
    <?php
        $record = "jdoe:8w4dso3a39Yk2:1363:24:JohnDoe:/home/jdoe:/bin/bash:extra 1:extra 2";
        $password = array("Login Name", "Optional Encripted Password", "Numerical User Id", "Numerical Group Id", "Username of Comment Field", "User Home Directory", "Optional User Command Interpreter");
        $fieldIndex = 0;
        $extraFields = 0;
        $currentField = strtok($record, ":");
        while ($currentField != NULL) {
            if ($fieldIndex < count($password)) {
                echo "<p>The {$password[$fieldIndex]} is <em>$currentField</em></p>\n";
            } else {
                ++$extraFields;
                echo "<p>Extra field # $extraFields is <em>$currentField</em></p>\n";
            }
            
            $currentField = strtok(":");
            ++$fieldIndex;
        }
    ?>
</body>

</html>