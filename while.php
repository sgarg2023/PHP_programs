<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $month=1;
        while($month <= 12){
            echo $month . " ,\n";
            $month+=1;
        }

        for($i=1; $i<=10;$i++){
            echo "$i =>Happy me, I have learned PHP,\n";
        }
    ?>
</body>
</html>