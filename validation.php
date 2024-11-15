<?php
    session_start();
    include 'config.php';
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $qr = "select * from user where username = '$uname' && password = '$password'";
    $qr1 = "select * from user";
    if($res = mysqli_query($conn,$qr)){

    }else{
        echo "error";
    }
    // $res = mysqli_query($conn,$qr);
    $row = mysqli_num_rows($res);
    $user= mysqli_fetch_array($res);
    if($row>0){
        // print_r($user);
        // echo $user['name'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['uname'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['contact']= $user['contact'];
        $_SESSION['login'] = true;
        header('location:index.php');   
        // echo 'hey';
    }else{
        // header('location:login.php');
        echo"<script>alert('username & Password not matched'); window.location.href = 'login.php';</script>";
        // echo 'no';
    }

?>