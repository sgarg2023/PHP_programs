<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $articles = [
          "one" => "shubhra Garg",
          "two" => "Ankit Garg",
          "three"=> "Anita Garg"
        ];
       foreach($articles as $index=>$art){
        echo $index."-".$art, ", ";
       }

    ?>
</body>
</html>