<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Associative Arrays</title>
</head>
<body>
    <h1>Associtative Arrays in PHP</h1>
    <?php
    $list = ["Nisha","Visha",161,"<h1>Hello</h1>"];
    print_r($list);
    // echo $list[3];

    // Change the array index values
    $info = ["myName"=>"Nisha","myHobby"=>"Hacker"];
    print_r($info);
    echo "<br>";
    echo $info["myName"];
    echo "<br>";
    echo $info["myHobby"];
    echo "<br>";
    echo $info["myName"] . " <br> ".$info["myHobby"];

    ?>

</body>
</html>