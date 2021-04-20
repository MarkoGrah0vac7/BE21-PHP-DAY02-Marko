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
    function minToHours($time) {
        if($time < 0) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return "The amount of $time minutes is equal to $hours hours and $minutes minutes.";
    }
        echo minToHours(470);
    ?>
</body>
</html>