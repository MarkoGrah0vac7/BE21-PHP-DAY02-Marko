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
            function cal($width,$height,$depth) {
                $area = $width * $height;
                $volume = $width * $height * $depth;

                return array($volume, $area);
            }

        echo "The area of the box is:" .cal(2,3,4)[1]. "<br>" ;

        echo "The volume of the box is:".cal(2,3,4)[0];

    ?>
</body>
</html>