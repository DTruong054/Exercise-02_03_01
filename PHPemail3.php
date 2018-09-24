<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>Email3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Email3</h2>
    <?php
    $emailAddresses = array("john.smith@php.test","marry.smith@php.test", "john.jones@php.invalid", "alan.smithee@test", "jsmith456@example.com", "Jsmith456@test", "mjones@example", "mjones@example.com");

        function sortAdresses($addresses)
        {
            $sortedAdresses = array();
            $ilimit = count($addresses) - 1;
            $jlimit = count($addresses);
            for ($i=0; $i < $ilimit; $i++) { 
                $currentAddresses = $addresses[$i];
                for ($j=$i + 1; $j < $jlimit; $j++) { 
                    if (strcasecmp($currentAddresses, $addresses[$j]) > 0) {
                        //Swap
                        $tempVal = $addresses[$j];
                        $addresses[$j] = $currentAddresses;
                        $currentAddresses = $tempVal;
                    }
                }
                $sortedAddresses[] = $currentAddresses;
            }
            return($sortedAddresses);
        }

        $sortedAddresses = sortAdresses($emailAddresses);
        $sortedAddressesList = implode(", ", $sortedAddresses);
        echo "<p>Sorted addresses: $sortedAddressesList</p>";
        function validateAddress($addresses)
        {
            if (strpos($addresses, '@') !== false && strpos($addresses, '.') !== false) {
                return true;
            } else {
                return false;
            }
            
        }

        foreach ($sortedAddresses as $value) {
            if (validateAddress($value) === false) {
                echo "<p>The e-mail addresses <em>$value</em> does not appear to be valid</p>";
            }
        }
    ?>
</body>

</html>