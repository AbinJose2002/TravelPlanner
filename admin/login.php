<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login-style.css">
</head>
<body>
    <div class="login">
        <div class="login-heading">
            <h1 class="heading">Login</h1>
            <form method="post" class="login-form"><br>
                <input required checked type="mail" placeholder="Enter user mail" class="frm-txt" name="uname" size="40"><br><br>
                <input required minlength="8" type="password" placeholder="Enter user password" class="frm-pass" name="upass">
                <br>
                <label class="new-user" for="new-user">New User? <a href="registration.php">click here</a></label><!--new user-->
                <input type="submit" name="frm-submit" class="frm-btn" value="Log In"><br><br>
                <input type="reset" class="frm-btn" value="Clear">
            </form>
            
        </div>
    </div>
</body>
</html>

<?php

    if(isset($_POST['frm-submit'])){
        require("../db/conn.php");
        $uname = $_POST['uname'];
        $pass = $_POST['upass'];

        $sql = "select * from agent where email = '$uname' and password = '$pass'";

        $result = mysqli_query($conn, $sql);

        if($result){
            $row = mysqli_fetch_row($result);
            $id = $row[0];
            echo $id;
            header("Location:./dash.php?id=$id");
        }else{
            echo "no";
        }

    }

?>