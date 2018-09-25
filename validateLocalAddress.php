<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>Validate Local Address</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Local Address</h2>
    <?php
    //Email addresses being tested
        $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith123@mail.example.org");
        foreach ($email as $emailAddress) {
            //Writes the email address
            echo "The email address &ldquo;" . $emailAddress . "&rdquo;";
            //uses regex to test if the email address is valid
            if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
                //If valid...
                echo "is a vaild e-mail address <br>";
            } else {
                //If invalid...
                echo "is a not vaild e-mail address <br>";
            }
            
        }
    ?>
</body>

</html>