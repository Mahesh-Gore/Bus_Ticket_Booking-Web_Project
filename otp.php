<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="style/javascriptfile.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <form name="verify" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td> Enter Captcha : </td>
            </tr>
            <tr>
                <td>
                    <input type='text' id='cptno' value="<?php $c = rand(1000, 9999);
                                                            $n = $c;
                                                            echo $c; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="captcha" id="cptent"> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="verify" value="Verify" onclick="return captcha_verify();"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    session_start();
    $_SESSION['uname']=$name = $_SESSION['uname'];
    $_SESSION['unumber']=$number = $_SESSION['unumber'];
    $_SESSION['price']= $price = $_SESSION['price'];
    $_SESSION['src']= $src = $_SESSION['src'];
    $_SESSION['dest']= $dest = $_SESSION['dest'];
    date_default_timezone_set("Asia/Kolkata");
    $_SESSION['time']=$time = date("h:i A");
    $_SESSION['date']=$date = date("Y/m/d");
    include_once('connection.php');
    $query = "INSERT INTO booked_tickets (name, number,date,time,src,dest,price) VALUES ('$name', '$number', '$date','$time','$src','$dest','$price');";
    if (mysqli_query($conn, $query)) {
        echo "<script type=text/javascript>
                window.location='ticket.php';
        </script>";
    }
}
?>