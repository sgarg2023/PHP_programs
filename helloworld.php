<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Welcome shubhra<\br>";
        $message="Welcome to Australia, sydney";
        echo $message;
        $a=10;
        $b=1.99;
        $c="Miss world";
        var_dump($a);
        var_dump($b);
        var_dump($c);

        $is_admin=true;
        $data="My happy mom";
        var_dump($is_admin,$data);
        $price=12.50;
        $quantity=5;
        var_dump($price*$quantity);
        echo "\n count value is \n";
        $count=3;
        var_dump($count*5);

        $first="David";
        $surname="Marshall";
        echo $first ." ".$surname;
        echo "\n\n";
        $price1="150";
        $price1 = $price1 * $quantity;
        
        var_dump($price1);
    ?>
</body>
</html>