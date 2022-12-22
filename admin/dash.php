<?php
require('../db/conn.php');
session_start();
$val = $_SESSION['id'];
$sql = "select * from user where uid=$val";
$result = mysqli_query($conn, $sql);
if($result){
    $row = mysqli_fetch_array($result);
}
$img = $row['profile'];
?>

<body>

<!-- dashboard top -->
    <div class="dash">
        <div class="dash-head">
            <div class="dash-user">
                <?php echo"<img src='../assets/$img'>"; ?>
                <h1 class="greet">Hi <?php echo $row['fname'];?></h1>
            </div>
            <div class="dash-profile">
                <a href="">Profile</a><a href="../login_reg/login.php">Logout</a>
            </div>
        </div>
    </div>
</body>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .dash-head{
        padding: 2em 3em;
        display: flex;
        align-items: center;
    }

    .dash-head img{
        border-radius: 50px;
        width:5em;
        margin-right: 2em;
        height:5em;
    }

    .dash{
        width: 80%;
        margin: 0 auto;
        border-bottom: 2px solid;
    }

    .dash-user, .dash-profile{
        width: 50%;
        display: flex;
        align-items: center;
    }

    .dash-profile{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .dash-profile a{
        color: black;
        text-decoration: none;
        font-size: 2em;
    }

</style>