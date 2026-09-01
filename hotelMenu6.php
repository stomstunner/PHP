<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- in this program we create a hostel menu where we just have to select the quantitiy and the total price will be shown in the dispaly  -->

    <form action="hotelMenu6.php" method="post">

        <label>Quantity:</label>
        <br>
        <input type="text" name="quantity">
        <br><br>
        <button type="submit">Total</button>
    </form>
</body>

</html>

<!-- here we write the logic for php to get the data and modifiy and show on screen -->

<?php

// lets creat the varibales 
    $item = "Pizza";
    $price = 4.99;
    // we make the local varibale for the quanatity
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo"You Ordered {$quantity} {$item}.<br>";
    echo"Total: {$total}";


?>