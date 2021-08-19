<!DOCTYPE html>
<html>

<head>
    <title>Online PMPML Bus Ticket</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="style/javascriptfile.js"></script>
    <script src="https://kit.fontawesome.com/ea215485af.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <div class="header">

        <div class="logo"><img src="images/app.png"></div>
        <div class="name">Pune Mahanagar Parivahan Mahamandal Limited</div>
        <div class="sname">PMPML</div>
        <div class="logo"><img src="images/pmpml.jfif"></div>

    </div>
    <div class="nav" id="nav">
        <a href="home.html"><i class="fa fa-home" style="padding-right:10px"></i>Home</a>
        <a href="about.html"><i class="fa fa-info" style="padding-right:10px"></i>About us</a>
        <a href="help.html"><i class="fas fa-question" style="padding-right:10px"></i>Help</a>
        <a href="feedback.php" class="active"><i class="fas fa-comment-dots" style="padding-right:10px"></i>Feedback</a>
        <a href="javascript:void(0);" class="icon" onclick="mynavbar()"><i class="fa fa-bars"></i></a>
    </div>
    <div class="feedbackbody" style="background:url(images/feedback_bg.png);background-repeat: no-repeat;background-size: 100% 100%;background-position: center;">
            <form name="feedback" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table>
                    <tr>
                        <th colspan="2">
                            <text class="title">Feedback</text>
                        </th>
                    </tr>
                    <tr>
                        <th><i class="fas fa-user fa-lg"></i>Enter Your Name: -</th>
                        <td><input type="text" name="name" id="name"></td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-phone-alt fa-lg"></i>Enter Your Number: -</th>
                        <td><input type="text" name="number" id="number"></td>
                    </tr>
                    <tr>
                        <th><i class="far fa-envelope fa-lg"></i>Enter Your Email: -</th>
                        <td><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-comments fa-lg"></i>Enter Your Feedback: -</th>
                        <td><textarea name="fb_descp" id="fb_descp"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" name="fb_submit" value="Submit" onclick=" return msg();"></center></td>
                    </tr>
                </table>
            </form> 
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
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once('connection.php');
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $fb=$_POST['fb_descp'];
    $query = "INSERT into feedbackrecords (uname,unumber,uemail,feedback) values('$name','$number','$email','$fb')";
    if (mysqli_query($conn, $query)) {
        echo "<script type=text/javascript>
        alert('Thank You ".$name." for your Feedback...');
        </script>";
    }
}
?>