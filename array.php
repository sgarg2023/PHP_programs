<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $articles=["Shubhra", "Garg", "Ankit", "Anita"];
        var_dump($articles);
        $art= array("Hanuman", "Durga", "Sarawati");
        var_dump($art);
        echo "\n Printing only the second element of the array:\n";
        var_dump($art[2]);

        $varities=[1=>"Maggie", 3=>"Noodles", "Pav bhaji"];
        var_dump($varities);

        $cakes=array("two"=>"Strawberry", "ten"=>"pineapple", "six"=>"vanilla");
        var_dump($cakes);
    ?>
</body>
</html>