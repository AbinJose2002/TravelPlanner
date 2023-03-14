<?php
    $conn = mysqli_connect("localhost","root","","travel1");
    if(!$conn){
        die("Connection Error" . mysqli_connect_error());
    }
?>