<?php

    include 'config.php';







    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $type = $_POST['type'];
    if(isset($_POST['book'])){
        $qr = "insert into booking (book_type,cust_name,cust_contact) values('$type','$name','$contact')";
        $res = mysqli_query($conn,$qr);
        header('location:rooms.php');
    }
