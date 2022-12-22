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
            <form action="./process.php" method="post" class="login-form"><br>
                <input required checked type="mail" placeholder="Enter user mail" class="frm-txt" name="uname" size="40"><br><br>
                <input required minlength="8" type="password" placeholder="Enter user password" class="frm-pass" name="upass">
                <br>
                <label class="new-user" for="new-user">New User? <a href="registration.php">click here</a></label><!--new user-->
                <input type="submit" class="frm-btn" value="Submit"><br><br>
                <input type="reset" class="frm-btn" value="Clear">
            </form>
            
        </div>
    </div>
</body>
</html>
