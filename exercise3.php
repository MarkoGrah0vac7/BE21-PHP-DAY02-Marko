<!-- Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. then make the calculation and print them on the screen. Make sure that the variables are numbers. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function subjects ($grade1,$grade2,$grade3) {
    $sum = $grade1 + $grade2 + $grade3;
    $average = ($grade1 + $grade2 + $grade3) / 3;

    echo "The sum of your school subject is: $sum, and the average Value of them is: $average.";
}

subjects(10, 9, 8);

?>
    
</body>
</html>