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

    ?>
</body>
</html>