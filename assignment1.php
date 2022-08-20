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
        function evaluate($name,$attendance,$hygiene,$rating)
        {
            if($attendance<80 || $hygiene<70 || $rating < 2)
            {
                echo"$name,You are fired from Rojan Kirana Passal!!";
            }
            else {
                echo"Not Fired for now";
            }
        }
        evaluate("Ujwal Shakhakarmi",10,70,1);
    ?>
</body>
</html>