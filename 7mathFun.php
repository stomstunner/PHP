<!-- here in this program we see some math function  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7mathFun.php" method="post">
        <label for="text">X</label><br>
        <input type="text" name="x"><br><br>
        <label for="text">Y</label><br>
        <input type="text" name="y"><br><br>
        <button type="submit">Submit</button><br><br>
    </form>
</body>
</html>

<?php 

    // first of all receve and store the varibale from the from to a variable 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;

    // $total = abs($x); 
    // when we write the negative degit it only resultant the positive num 

    // $total = round($x);
    // $total = round($x, 3); // for how many digit
    // it gives us the round number 

    // $total = floor($x);
    // it gives only rounded down number 4.89 = 4

    // $total = pow($x, $y);

    // $total = max($x, $y);
    // $total = min($x, $y);
    // $total = sqrt($x);
    // $total = pi();

    // $total = rand(); 
    // $total = rand(1,6); // min and max range
    
    echo$total;
?>