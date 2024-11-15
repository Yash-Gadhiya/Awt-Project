<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
</head>
<body>
    <?php

    include 'config.php';

    $uname = $_POST['uname'];
    $contact = $_POST['contact'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    if(isset($_POST['forgot'])){
        $qr = "select * from user where username = '$uname' && contact = '$contact'";
        $res = mysqli_query($conn,$qr);
        $row = mysqli_fetch_row($res);
        if($row>0){
            if($pass == $cpass){
                $qrr = "update user set password = '$pass' where username = '$uname' && contact = '$contact'";
                $ress = mysqli_query($conn,$qrr);
                header('location:login.php');
            }else{
                echo "<script>alert('both password is not same'); window.location.href = 'forgot.php';</script>";
            }
        }else{
            echo "<script>alert ('username not matched'); window.location.href = 'forgot.php';</script>";
        }
    }

    ?>
</body>
</html>

