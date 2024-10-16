<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .square{
            width:10px;
            height:10px;
            background-color: violet;
            display: inline-block;
            margin: 5px;
        }

    </style>
</head>
<body>
<?php
    for($i=0;$i<=10;$i++){
        for($j=0;$j<=5;$j++){
            echo "<div class= 'square'></div>";
        }
        
        echo "<br>";
    }
    
    ?>
    
</body>
</html>
