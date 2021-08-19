<?php
session_start();
$name = $_SESSION['uname'];
$number = $_SESSION['unumber'];
$price = $_SESSION['price'];
$src = $_SESSION['src'];
$dest = $_SESSION['dest'];
$_SESSION['uname']=$name;
$_SESSION['unumber']=$number;
$_SESSION['price']=$price;
$_SESSION['src']=$src;
$_SESSION['dest']=$dest;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMPML Payment</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="style/javascriptfile.js"></script>
    <script src="https://kit.fontawesome.com/ea215485af.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="paymentbody">
        <div class="title">
            <text>PMPML Payment</text>
        </div>
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
        </table>
        <div class="buttons">
            <text>Pay using</text><br>
            <button onclick="debit_payment()">Debit Card</button>
            <button onclick="credit_payment()">Credit Card</button>
            <button onclick="upi_payment()">UPI Id</button>
        </div>
        <form action="otp.php" method="POST" id="debit" class="pay">
            <table>
                <caption>Enter Your Debit Card Details</caption>
                <tr>
                    <td> Card Number : </td>
                    <td> <input type="text" name="dcard_number" id="dcard_number"> </td>
                </tr>
                <tr>
                    <td> Expiry Month : </td>
                    <td> <input type="text" name="dcard_expmm" id="dcard_expmm"> </td>
                </tr>
                <tr>
                    <td> Expiry Year : </td>
                    <td> <input type="text" name="dcard_expyy" id="dcard_expyy"> </td>
                </tr>
                <tr>
                    <td> Enter CVV : </td>
                    <td> <input type="text" name="dcard_cvv" id="dcard_cvv"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Pay <?php echo $price ?>  /-" name="debit" onclick="return dcardvalidate();"></td>
                </tr>
            </table>
        </form>
        <form action="" id="credit" class="pay">
            <table>
                <caption>Enter Your Credit Card Details</caption>
                <tr>
                    <td> Card Number : </td>
                    <td> <input type="text" name="ccard_number"> </td>
                </tr>
                <tr>
                    <td> Expiry Month : </td>
                    <td> <input type="text" name="ccard_expmm"> </td>
                </tr>
                <tr>
                    <td> Expiry Year : </td>
                    <td> <input type="text" name="ccard_expyy"> </td>
                </tr>
                <tr>
                    <td> Enter CVV : </td>
                    <td> <input type="text" name="ccard_cvv"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" value="Pay <?php echo $price ?> /-" name="credit"></td>
                </tr>
            </table>
        </form>
        <form action="" id="upi" class="pay">
            <table>
                <caption>Enter Your UPI Details</caption>
                <tr>
                    <td> UPI Id : </td>
                    <td> <input type="text" name="upi_id"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" value="Pay <?php echo $price ?> /-"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>