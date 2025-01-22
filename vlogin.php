<?php
session_start();
require_once('connection.php');
if(isset($_POST['submit'])) {
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
if(empty($username)) {
$message = 'Username must not be empty!';
require_once('message.php');
}
elseif(empty($password)) {
$message = 'Password must not be empty!';
require_once('message.php');
}
else {
$str = "select * from userstb where username = '$username'";
$cmd = mysqli_query($mycon, $str) or die('No Connection!');
$nr = mysqli_num_rows($cmd);
if($nr > 0) {
$rd = mysqli_fetch_array($cmd);
$user = $rd['username'];
$pwd = $rd['password'];
$_SESSION['userName'] = $rd['username'];
$_SESSION['firstName'] = $rd['firstname'];
$_SESSION['middleName'] = $rd['middlename'];
$_SESSION['lastName'] = $rd['lastname'];
$_SESSION['Email'] = $rd['email'];
$_SESSION['Password'] = $rd['password'];
$_SESSION['Phone'] = $rd['phone'];
$_SESSION['Gender'] = $rd['gender'];
$_SESSION['State'] = $rd['state'];
$_SESSION['Candidate'] = $rd['candidate'];
$_SESSION['Activation'] = $rd['activation'];


if($password == $pwd) {
echo "<script language='javascript'>window.open('lhome.php', '_parent')</script>";
}
else {
$message = 'Incorrect Password/Username!';
require_once('message.php');
}}
else {
$message = $username . ' Incorrect username/password';
require_once('message.php');
}}}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="vlogin.css">
    <!-- <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="bigdiv">
        <h3 class="login">Login to your account</h3>
        
        <form action="" method="POST" class="formclass">

            <p><input class="newp" type="text" name="username" size="20" placeholder="USERNAME"></p>
            <p><input class="newp" type="password" name="password" size="20" placeholder="PASSWORD"></p>
            <input class=" btn loginb" type="submit" name="submit" value="LOGIN">

        </form>
    
        <span class="ss">Do not have an account? <a href="vregister.php"><input class=" btn register" type="button" name="register" value="SIGN UP"></a></span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>