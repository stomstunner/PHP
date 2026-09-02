<!-- here we check the number is even or odd with the help of fucntion  -->

<?php 

function is_even(int $num){
    if($num % 2 == 0){
        return "{$num} is even";
    }
    else{
        return "{$num} is odd";
    }
}

// in php echo cannot be returned 
// so we directly return the string

$result = is_even(14);

echo $result;

?>