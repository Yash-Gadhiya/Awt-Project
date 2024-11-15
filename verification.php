<?php
    session_start();
    include 'config.php';


    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(isset($_POST['signup'])){
        if($password == $cpassword){
            $qr = "insert into user (name,username,email,contact,password) values ('$name','$uname','$email',$contact,'$password')";
            $res = mysqli_query($conn,$qr);
            if($res){
                header('location:login.php');
            }else{
                echo"error in insert";
            }
        }else{
            echo"<script>alert('Both Password Not Same'); window.location.href = 'signup.php';</script>";
        }
        
    }

?>