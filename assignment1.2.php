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
            if(($attendance < 80 && $hygiene < 50)||($hygiene < 50 && $rating < 2))
            {
                echo"$name,You are fired form Rojan Kirana Pasal";  
            }
            else {
                echo"Not fired for now";
            }
        }
        evaluate("Ujwal",80,40,1)
    ?>
</body>
</html>