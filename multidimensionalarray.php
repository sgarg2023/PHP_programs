<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $posts = [
            ["title"=> "first", "content"=> "shubhra Garg is the CEO"],
            ["title"=> "second", "content"=>"Ankit Garg is the CFO"],
            ["title"=> "third", "content"=>"Anita Garg is th COO"]
        ];
        var_dump($posts);
        echo "\n The first element content are : \n";
        var_dump($posts[1]["title"]);
        echo "\n The second element content are : \n";
        var_dump($posts[2]["content"]);

    ?>
</body>
</html>