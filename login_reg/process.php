<?php
    session_start();
    $email = $_POST['uname'];
    $pass = $_POST['upass'];
    require('../db/conn.php');
    $sql = "select * from user where email='$email' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        $row = mysqli_fetch_row($result);
        $_SESSION['id'] = $row[0];
        if($row[12]=='user'){
            header('Location:../admin/dash.php');
        }else if($row[12]=='agent'){
            header('Location:../admin/dash.php');
        }
    }else{
            
            echo "<script>alert('Invalid Credantials')</script>";
    }
    

?>