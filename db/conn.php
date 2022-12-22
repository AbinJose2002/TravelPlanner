<?php
    $conn = mysqli_connect("localhost","root","","travel");
    if(!$conn){
        die("Connection Error" . mysqli_connect_error());
    }
?>