<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: DiceRoll.php -->

<head>
    <meta charset="utf-8" />
    <title>Validate Credit Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Credit Card</h2>
    <?php
        $creditCard = array("", "8910-1234-5678-6543", "OOOO-9123-4567-0123");
        
        foreach ($creditCard as $indexNumber => $cardNumber) {
            if ($empty($cardNumber)) {
                echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string</p>";
            } else {
                $creditCardNumber = $cardNumber;
                $creditCardNumber =str_replace("-", "", $creditCardNumber);
                $creditCardNumber =str_replace("", "", $creditCardNumber);
                echo "<p>Credit card number $indexNumber $creditCardNumber removed dashes and spaces</p>";
                if (!is_numeric($creditCardNumber)) {
                    echo "<p>Credit card number $indexNumber $creditCardNumber is invalid becasue it contains a non-numeric character.</p>";
                } else {
                    echo "<p>Credit card number $indexNumber $creditCardNumber is valid credit card number</p>";
                }
                
            }
        }
    ?>
</body>

</html>