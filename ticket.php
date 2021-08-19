<?php
session_start();
$name = $_SESSION['uname'];
$number = $_SESSION['unumber'];
$price = $_SESSION['price'];
$src = $_SESSION['src'];
$dest = $_SESSION['dest'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMPML Ticket</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="style/javascriptfile.js"></script>
    <script src="https://kit.fontawesome.com/ea215485af.js" crossorigin="anonymous"></script>
</head>
<body>
<table class="details">
            <tr>
                <td> Name : </td>
                <td> <?php echo $name; ?> </td>
            </tr>
            <tr>
                <td> Number : </td>
                <td> <?php echo $number; ?> </td>
            </tr>
            <tr>
                <td> Source : </td>
                <td> <?php echo $src; ?> </td>
            </tr>
            <tr>
                <td> Destination : </td>
                <td> <?php echo $dest; ?> </td>
            </tr>
            <tr>
                <td> Price : </td>
                <td> <?php echo $price; ?> </td>
            </tr>
            <tr>
                <td> Date : </td>
                <td> <?php echo $date; ?> </td>
            </tr>
            <tr>
                <td> Time : </td>
                <td> <?php echo $time; ?> </td>
            </tr>
        </table>
</body>
</html>