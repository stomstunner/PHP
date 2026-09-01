<!-- here in this php we are using the get method 
-->

<!-- so the GET method is a type of method to get the data from our html form but the main problem is ki hamra jo bhi data jata hai woh url me show hota hai , so the security is very low  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <!-- lets make a form  -->
<form action="get4.php" method="get">
    <label>Username: </label><br>
    <input type= "text" name="username"><br> 
    <label>Password: </label><br>
    <input type="text" name="password"><br><br>
    <button type="submit">Log in</button>
</form>


</body>
</html>

<!-- now we just take the data with the help of the get method it contains a array  -->

<?php

    echo"<br> Your Username is : {$_GET["username"]}";
    echo"<br> And your Password is : {$_GET["password"]}";

    // but get is good for data which is not sensitive , it is very helpful for searching the data , Not secure , char limit, bookmarks is posible , data is visible in the url , data is cached in the browser history
?>