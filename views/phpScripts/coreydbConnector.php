<?php

    $con=mysqli_connect('localhost','root','','cinema_ebooking');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>