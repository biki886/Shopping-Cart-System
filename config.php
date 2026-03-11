<?php
    $conn = new mysqli("localhost","root","","shoping_cart");
    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
?>