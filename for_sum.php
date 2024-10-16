<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
      $sumc=0;
      $suml=0;
      $sum=0;
      for($i=0;$i<=10;$i++){
        $sum+=$i;
        if($i%2==0){
            $sumc+=$i;
        }else{
            $suml+=$i;

        }
      }
       echo "Tổng chẵn: $sumc<br>";
       echo "Tổng lẻ: $suml<br>";
       echo "Tổng cả tổng chẵn và tổng lẻ là: $sum<br>";


    ?>
</body>
</html>