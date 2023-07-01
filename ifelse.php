<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $article=[
            "Shubhra",
            "Ankit",
            "Satyendra"
        ];

        if(empty($article)){
            echo "\n The array is empty\n";
        }
        else{
            var_dump($article);
        }

        echo"\nLets try printing hours:\n";
        $hour=11;
        if($hour <12){
            echo "\nGood morning\n";
        }elseif($hour <18){
            echo "\nGood afternoon\n";
        }elseif($hour <22){
            echo "\nGood evening\n";
        }else{
            echo "\nGood night\n";
        }

    ?>
</body>
</html>