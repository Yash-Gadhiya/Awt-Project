<?php
function total_payment()
{

    $date1 = new DateTime($_SESSION['checkindate']);
    $date2 = new DateTime($_SESSION['checkoutdate']);
    $interval = $date1->diff($date2);
    $dayCount = $interval->format('%a');
    
    if ($_SESSION['roomtype'] = "Suite Room") {
        $totalpayment = 2500 * $_SESSION['rooms'] * $dayCount;
        echo $totalpayment;
    } elseif ($_SESSION['roomtype'] = "Family Room") {
        $totalpayment = 5000 * $_SESSION['rooms'] * $dayCount;
        echo $totalpayment;
    } elseif ($_SESSION['roomtype'] = "Luxuary Room") {
        $totalpayment = 15000 * $_SESSION['rooms'] * $dayCount;
        echo $totalpayment;
    } elseif ($_SESSION['roomtype'] = "Goaasy Room") {
        $totalpayment = 13000 * $_SESSION['rooms'] * $dayCount;
        echo $totalpayment;
    } elseif ($_SESSION['roomtype'] = "Superior Room") {
        $totalpayment = 10000 * $_SESSION['rooms'] * $dayCount;
        echo $totalpayment;
    } elseif ($_SESSION['roomtype'] = "Classic Room") {
        $totalpayment = 8500 * $_SESSION['rooms'] * $dayCount;
        echo $totalpayment;
    } else {
        echo "Room not Selected";
    }
}