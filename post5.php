<!-- here in this php we are using the post method 
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <!-- lets make a form  -->
<form action="post5.php" method="post">
    <label>Username: </label><br>
    <input type= "text" name="username"><br> 
    <label>Password: </label><br>
    <input type="text" name="password"><br><br>
    <button type="submit">Log in</button>
</form>


</body>
</html>

<!-- now we just take the data with the help of the post method it contains a array  -->

<?php

    echo"<br> Your Username is : {$_POST["username"]}";
    echo"<br> And your Password is : {$_POST["password"]}";

    // but post is good for data which is sensitive , it is very helpful for sending the data , secure , char limit, bookmarks is not posible , data is not visible in the url , data is not cached in the browser history
?>