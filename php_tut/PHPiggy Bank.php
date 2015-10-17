<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>PHPiggy Bank</title>

    <?php

    /* Define 4 different variables, which will each
    represent how much a given coin is worth.
    */
    $penny_value   = .01;
    $nickle_value  = .05;
    $dime_value    = .10;
    $quarter_value = .25;

    # echo $foobar;

    /*
    Define 4 more variables, which will each represent
    how many of each coin is in the bank.
    */
    $pennies  = 100;
    $nickles  = 25;
    $dimes    = 100;
    $quarters = 34;

    # Add up how much money is in the piggy bank
    $total = ($pennies * $penny_value) + ($nickles * $nickle_value) + ($dimes * $dime_value) + ($quarters * $quarter_value);

    # Prepend a dollar sign
    # $total = "$".$total;

    $goal = 50;

    # Write an If statement that will set image variable dependent on goal
    if ($total < 30) {
        $image = "php-goal-not-met.png";
    } else if ($total > $goal) {
        $image = "php-goal-met.png";
    } else {
        $image = "php-goal-almost-met.png";
    }
    ?>

</head>

<body>

    <img src='http://making-the-internet.s3.amazonaws.com/php-phpiggy-bank.png' alt='PHPiggy Bank Logo'>
    <br />

    <p>
       You have $<?php echo $total; ?> in your bank.
       <br /><br />
       <img src = 'http://making-the-internet.s3.amazonaws.com/<?php echo $image?>' alt = 'Goal Status'>
    </p>

</body>
</html>