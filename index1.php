<?php

    // lets create a variable
    $name = "Ujjwal Singh";
    echo $name;

    // lets try to add the variable name in a more dynamic way
    $varibale1 = "Nirmal Singh";
    echo "<br> My name is {$varibale1}";

    $email = "Ujjwalk863@gmail.com";
    echo"<br>This is the email - {$email} of {$name}";

    $age = 21;
    echo"<br>you are {$age} years old ";

    // float datatypes
    $cgpa = 9.38;
    echo"<br> This is the cgpa of {$name} = {$cgpa}";

    $price = 4.99;
    // if we want to display the doller sigh then we have to use the escape sign 
    echo"<br> Your pizza is \${$price}";

    // boolean data type = only true can be displayed , false can't be seen on the display 

    $online = true;
    $employed = false;

    echo"<br> {$name} online status: {$online}";
    echo"<br> {$name} employement status: {$employed}";
    // when noting appears then it is false 


    // lets see the some calculations 
    $quantity = 3;
    $food = "Pizza";
    $total = null;

    echo"<br>{$name} wants {$quantity}X {$food} <br> ";
    $total = $quantity * $price;
    echo"The total price of the {$food} is \${$total}";

?>