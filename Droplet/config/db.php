
<?php

$conn = mysqli_connect('localhost','sam','2410','ngo_system',3306);

if(!$conn)
{
    die("connection error : ".mysqli_connect_error());
}
?>