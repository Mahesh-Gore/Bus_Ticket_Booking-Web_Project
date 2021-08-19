<?php
session_start();
$uid = $_SESSION['uid'];
// echo"$uid";
include_once('connection.php');
$query = "select * from users_data where unumber='$uid'";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($result);
$_SESSION['uname']=$rows['uname'];
$_SESSION['unumber']=$rows['unumber'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMPML BookTicket</title>

    <link rel="stylesheet" href="style/style.css">
    <script src="style/javascriptfile.js"></script>
    <script src="https://kit.fontawesome.com/ea215485af.js" crossorigin="anonymous"></script>
    <!-- <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script> -->
</head>

<body>
    <div class="header">
        <div class="logo"><img src="images/app.png"></div>
        <div class="name">Pune Mahanagar Parivahan Mahamandal Limited</div>
        <div class="sname">PMPML</div>
        <div class="logo"><img src="images/pmpml.jfif"></div>
    </div>
    <div class="btk_navbar">
        <text style="float:left;">Hi <?php echo $rows['uname']; ?></text>
        <section style="float:right;"><a href="booked_tickets.php">My Booked Tickets</a>
        <a href="login.php" >Logout</a></section>
    </div>
    <div class="bookticketbody">
        <center>
            <form name="bookticket" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table cellpadding="10px">
                    <tr>
                        <th colspan="2">
                            <text class="title">Book Ticket</text>
                        </th>
                    </tr>
                    <tr>
                        <th>Name :- </th>
                        <td><input type="text" name="uname" id="uname" value="<?php echo $rows['uname']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th>Mobile Number :- </th>
                        <td><input type="text" name="unumber" id="unumber" value="<?php echo $rows['unumber']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th>Select Source :- </th>
                        <td>

                            <select name="src" id="src">
                                <?php
                                $options = array('MA_NA_PA', 'Vadgaonsheri', 'Swargate', 'Pune_Station', 'Vimannagar', 'Yerwada', 'Wadia_College', 'Shastri_Nagar', 'Hadapsar','Wagholi');
                                foreach ($options as $opt) {
                                    if (!empty($_REQUEST['src']) && $_REQUEST['src'] === $opt) {
                                        echo " <option value=" . $opt . " selected >" . $opt . " </option>";
                                    } else {
                                        echo " <option value= " . $opt . "> " . $opt . " </option>";
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Select Destination :- </th>
                        <td><select name="dest" id="dest">
                                <?php
                                //$options = array('MA_NA_PA', 'Vadgaonsheri','Swargate','Pune_Station','Vimannagar','Yerwada','Wadia_College','Shastri_Nagar','Hadapsar');
                                foreach ($options as $opt) {
                                    if (!empty($_REQUEST['dest']) && $_REQUEST['dest'] === $opt) {
                                        echo " <option value=" . $opt . " selected >" . $opt . " </option>";
                                    } else {
                                        echo " <option value= " . $opt . "> " . $opt . " </option>";
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="bkt" value="Check Price" onclick="return bt_validate();"></td>
                    </tr>
                    <?php
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                
                $_SESSION['src']=$src = $_POST['src'];
                $_SESSION['dest']=$dest = $_POST['dest'];
                include_once('connection.php');
                $query = "SELECT * from bus_ticket_prices where src='$src' and dest='$dest'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_fetch_assoc($result);
                $_SESSION['price']=$rows['price'];
                echo "<tr><td>Selected source is ".$src."</td><td> Selected Destination is ".$dest." </td></tr>
                <tr><th>Price :- </th><td><input type='text' id='price' value=" . $rows['price'] . " readonly></td></tr>
                <tr><td colspan=2><input type='button' value='Proceed for Payment' onclick='pricevalidate()'></td></tr>";
            }
            ?>
                </table>
            </form>
        
        </center>
    </div>
    <div class="footer">
        <div class="follow">
            <font size="5px">Follow us on</font>
            <a href=""><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href=""><i class="fab fa-instagram-square fa-2x"></i></a>
            <a href=""><i class="fab fa-twitter-square fa-2x"></i></a>
        </div>
        <div class="cr">Copyright &copy 2020 OBTPMPML All Rights Reserved.</div>
    </div>
</body>

</html>