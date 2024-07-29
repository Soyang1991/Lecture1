<!DOCTYPE html>
<html>
<head>
    <title>PHP Conditional Statements</title>
</head>
<body>
    <h1>Conditional Statements</h1>
    <?php
    $var1 = 3;
    $var2 = 2;

    /* if example */
    if ($var1 == $var2) {
        echo("$var1 is the same as $var2 <br>");
    } else {
        echo("$var1 is NOT the same as $var2 <br>");
    }

    /* greater than example */
    if ($var1 > $var2) {
        echo("$var1 is greater than $var2 <br>");
    } else {
        echo("$var1 is not greater than $var2 <br>");
    }

    /* less than example */
    if ($var1 < $var2) {
        echo("$var1 is less than $var2 <br>");
    } else {
        echo("$var1 is not less than $var2 <br>");
    }

    /* greater or equal example */
    if ($var1 >= $var2) {
        echo("$var1 is greater than or equal to $var2 <br>");
    } else {
        echo("$var1 is not greater than or equal to $var2 <br>");
    }

    /* less or equal example */
    if ($var1 <= $var2) {
        echo("$var1 is less than or equal to $var2 <br>");
    } else {
        echo("$var1 is not less than or equal to $var2 <br>");
    }

    /* not equal example */
    if ($var1 != $var2) {
        echo("$var1 is not equal to $var2 <br>");
    } else {
        echo("$var1 is equal to $var2 <br>");
    }
    ?>
</body>
</html>
