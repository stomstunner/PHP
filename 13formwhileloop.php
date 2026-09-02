<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12formloop.php" method="post">
        <label>Enter a number to count to: </label><br><br>
        <input type="text" name="counter"><br><br>
        <button type="submit">Submit</button><br><br>
    </form>
</body>
</html>

<?php

    $counter = $_POST["counter"];
    $i = 0;
    while($i <= $counter){
        echo $i . "<br>";
        $i++;
    }

?>