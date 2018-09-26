<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>President</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents</h2>
    <?php
    //Array
        $presidents = array("George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe");
        $yearsInOffice = array("1789 to 1797", "1797 to 1801", "1801 to 1809", "1809 to 1817", "1817 to 1825");
        $outputTemplate = "<p>President [NAME] served from [TERM]</p>\n";


        //ForEach loop
        foreach ($presidents as $sequence => $value) {
            //used to replace the templete names
            $tempString = str_replace("[NAME]", $value, $outputTemplate);
            $outputString = str_replace("[TERM]", $yearsInOffice[$sequence], $tempString);
            echo $outputString;
        }
    ?>
</body>

</html>