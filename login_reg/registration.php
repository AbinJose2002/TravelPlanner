<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/registration-style.css">
    <title>Registration</title>
</head>
<body>
    <div class="registration">
        
        <div class="reg">
            <h1 class="heading">Registration</h1><br>
            <form class="registration-form" method="post" enctype="multipart/form-data">

                <input class="frm-element" type="text" name="fname" placeholder="Enter your first name" size="40"><br><br>

                <input class="frm-element" type="text" name="lname" placeholder="Enter your last name" size="40"><br><br>

                <input class="frm-element" placeholder="Enter your password" type="password" name="upass"><br><br>

                <input class="frm-element" placeholder="Enter your email address" type="mail" name="umail"><br><br>

                <input class="frm-element" type="text" name="address1" placeholder="Enter address line 1"><br><br>
                <input class="frm-element" type="text" name="address2" placeholder="Enter address line 2"><br><br>
                <input class="frm-element" type="text" name="address3" placeholder="Enter address line 3"><br><br>

                <div class="gender">
                    Enter Your Gender<br>Male
                    <input type="radio" name="gender" value="male">&nbsp;&nbsp;&nbsp;Female
                    <input type="radio" name="gender" value="female">&nbsp;&nbsp;&nbsp;Others
                    <input type="radio" name="gender" value="others"><br>
                </div><br>

                <div class="gender user">
                    Enter Your user type<br>Traveller
                    <input type="radio" name="user" value="user">&nbsp;&nbsp;&nbsp;Agent
                    <input type="radio" name="user" value="agent">&nbsp;&nbsp;&nbsp;<br><br>
                </div>
                
                <input  class="frm-element" type="number" name="uage" placeholder="Enter your age"><br><br>

                <input  class="frm-element" type="number" name="umobile" placeholder="Enter your mobile"><br><br>

                <div class="gender">
                    Upload your image <br>
                    <input type="file" name="image" id=""><br><br>
                </div>

                <input type="submit" name="insert-btn" class="frm-element frm-btn" value="Submit"><br><br>
                <input type="clear" class="frm-element frm-btn" value="Clear">
                
            </form>
        </div>
    </div>
</body>
</html>

<?php
    require('../db/conn.php');

    if(isset($_POST['insert-btn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['upass'];
        $email = $_POST['umail'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $address3 = $_POST['address3'];
        $gender = $_POST['gender'];
        $user = $_POST['user'];
        $age = $_POST['uage'];
        $mobile = $_POST['umobile'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $sql = "insert into user (fname, lname, password, email, address1, address2, address3, gender, age, mobile, profile, role)
        values ('$fname', '$lname', '$password', '$email', '$address1', '$address2', '$address3', '$gender', '$age', '$mobile', '$image', '$user')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "<script>alert('Unsuccesful Insertion');</script>";
        }else{
            echo "<script>alert('Succesful Insertion. Please Login...');</script>";
            move_uploaded_file($tmp_name,"upload/$image");
        }
    }

?>