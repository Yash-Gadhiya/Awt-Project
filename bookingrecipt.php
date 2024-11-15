<?php session_start();
// include 'function.php';
include 'config.php';
$select_query = "SELECT * FROM submitbooking ORDER BY bookingid DESC LIMIT 1";

$last_data = 
$data = mysqli_query($conn, $select_query);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }



        td {
            padding: 5px;
            border-bottom: 1px solid black;
        }

        .backhome a {
            color: blue;
            padding-top: 10rem !important;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">

        <table class="table">
            <thead>
                <tr class="heading" style="padding-bottom:10px;">
                    <th style="padding-bottom:30px;" colspan="3" class="heading">
                        <h1>Welcome to Goassy</h1>
                    </th>
                </tr>
            </thead>
            <tbody>

            <?php while($row = mysqli_fetch_array($data)){?>
                <tr>
                    <td>Name : </td>
                    <td colspan="2"><?= $row['name']?></td>

                </tr>
                <tr>
                    <td>Email : </td>
                    <td colspan="2"><?= $row['email']?></td>
                </tr>
                <tr>
                    <td>Contact No : </td>
                    <td colspan="2"><?= $row['contact']?></td>
                </tr>
                <tr>
                    <td>Room Type : </td>
                    <td colspan="2"><?= $row['roomtype']?></td>
                </tr>
                <tr>
                    <td>Rooms : </td>
                    <td colspan="2"><?= $row['rooms']?></td>
                </tr>
                <tr>
                    <td>Check In Date & Time : </td>
                    <td><?= $row['checkindate']?></td>
                    <td><?= $row['checkintime']?></td>
                </tr>
                <tr>
                    <td>Check Out Date & Time : </td>
                    <td><?= $row['checkoutdate']?></td>
                    <td><?= $row['checkouttime']?></td>

                </tr>
                <tr>
                    <td>One Room Amount (One Day) : </td>
                    <td colspan="2">
                        <?php
                        if ($_SESSION['roomtype'] = "Suite Room") {
                            echo 2500;
                        } elseif ($_SESSION['roomtype'] = "Family Room") {
                            echo "5000";
                        } elseif ($_SESSION['roomtype'] = "Luxuary Room") {
                            echo "15000";
                        } elseif ($_SESSION['roomtype'] = "Goaasy Room") {
                            echo "13000";
                        } elseif ($_SESSION['roomtype'] = "Superior Room") {
                            echo "10000";
                        } elseif ($_SESSION['roomtype'] = "Classic Room") {
                            echo "8500";
                        } else {
                            echo "Room not Selected";
                        }
                        ?>
                    </td>

                </tr>
                <tr>
                    <td>Total Amount : </td>
                    <td colspan="2">
                    <?= $row['totalpayment']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <div class="backhome" style="padding-top:30px;">
            <a href="index.php" name="backhome">Back to Home</a>
        </div>
    </div>

</body>

</html>