<?php
session_start();
include 'config.php';

$roomtype = "";
$rooms = 0;
$checkindate = 0;
$checkintime = 0;
$checkoutdate = 0;
$checkouttime = 0;
$totalpayment = 0;


$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$roomtype = $_POST['roomtype'];
$rooms = $_POST['rooms'];
$checkindate = $_POST['checkindate'];
$checkintime = $_POST['checkintime'];
$checkoutdate = $_POST['checkoutdate'];
$checkouttime = $_POST['checkouttime'];

$date1 = new DateTime($checkindate);
$date2 = new DateTime($checkoutdate);
$interval = $date1->diff($date2);
$dayCount = $interval->format('%a');

if ($roomtype == "Suite Room") {
    $totalpayment = 2500 * $rooms * $dayCount;
} elseif ($roomtype == "Family Room") {
    $totalpayment = 5000 * $rooms * $dayCount;
} elseif ($roomtype == "Luxuary Room") {
    $totalpayment = 15000 * $rooms * $dayCount;
} elseif ($roomtype == "Goaasy Room") {
    $totalpayment = 13000 * $rooms * $dayCount;
} elseif ($roomtype == "Superior Room") {
    $totalpayment = 10000 * $rooms * $dayCount;
} elseif ($roomtype == "Classic Room") {
    $totalpayment = 8500 * $rooms * $dayCount;
} else {
    echo "Room not Selected";
}

if (isset($_POST['submitbook']))



    $qr = "insert into submitbooking (name,email,contact,roomtype,rooms,checkindate,checkintime,checkoutdate,checkouttime,totalpayment) values ('$name','$email','$contact','$roomtype','$rooms','$checkindate','$checkintime','$checkoutdate','$checkouttime','$totalpayment')";
$res = mysqli_query($conn, $qr);
if ($res) {
    // print_r($res);
    header('location:bookingrecipt.php');

    // echo $checkoutdate;

} else {
    echo "error in insert";
}

// session_destroy();
