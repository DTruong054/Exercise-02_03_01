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
    //Arrays
        $record = "jdoe:8w4dso3a39Yk2:1363:24:JohnDoe:/home/jdoe:/bin/bash:extra 1:extra 2";
        $password = array("Login Name", "Optional Encripted Password", "Numerical User Id", "Numerical Group Id", "Username of Comment Field", "User Home Directory", "Optional User Command Interpreter");
        $extraFields = 0;
        //Explode example (Expands the records after every :)
        $field = explode(":", $record);
        foreach ($field as $fieldIndex => $fieldValue) {
            //Useage of the "fat arrow" in foreach loop
            if ($fieldIndex < count($password)) {
                echo "<p>The {$password[$fieldIndex]} is <em>$fieldValue</em></p>\n";
            } else {
                ++$extraFields;
                echo "<p>Extra field # $extraFields is <em>$extraFields</em></p>\n";
            }
        }
    ?>
</body>

</html>