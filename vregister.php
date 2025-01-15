<!-- <?php
// require_once('connection.php');
// if(isset($_POST['submit'])) {
// $username = $_REQUEST['username'];
// $fname = $_REQUEST['fname'];
// $mname = $_REQUEST['mname'];
// $lname = $_REQUEST['lname'];
// $email = $_REQUEST['email'];
// $password = $_REQUEST['password'];
// $phone = $_REQUEST['phone'];
// $gender = $_REQUEST['gender'];
// $state = $_REQUEST['state'];
// $str = "insert into userstb(username, firstname, middlename, lastname, email, password, phone, gender, state)values('$username', '$fname', '$mname', '$lname', '$email', '$password', '$phone', '$gender', '$state')";
// $cmd = mysqli_query($mycon, $str) or die('Unable to save');
// echo 'Records Save Successfully!';}
?> -->

<?php
require_once('connection.php');
if(isset($_POST['submit'])) {
    $username = $_REQUEST['username'];
    $fname = $_REQUEST['fname'];
    $mname = $_REQUEST['mname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $state = $_REQUEST['state'];
if(empty($username)) {
$message = 'Username must not be empty!';
require_once('message.php');
}
else {
$str = "select * from userstb where username = '$username'";
$cmd = mysqli_query($mycon, $str) or die('No Connection');
$nr = mysqli_num_rows($cmd);
if ($nr > 0) {
$message = $username . ' Already taken';
require_once('message.php');
}
else {
$str = "insert into userstb(username, firstname, middlename, lastname, email, password, phone, gender, state)values('$username', '$fname', '$mname', '$lname', '$email', '$password', '$phone', '$gender', '$state')";
$cmd = mysqli_query($mycon, $str) or die('Unable to save Data!!');
echo "<script language='javascript'>window.open('vlogin.php', '_parent')</script>";
// $message = 'Sign Up Successfully!!';
// require_once('message.php');
}}}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP PAGE</title>
    <link rel="stylesheet" href="vregister.css">
    <!-- <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="bigdiv">
        <h3 class="reg">SIGN UP</h3>
        <form action="" method="POST" class="formclass">

            <p><input class="newp" type="text" name="username" size="20" placeholder="USERNAME"></p>

            <p><input class="newp" type="text" name="fname" size="20" placeholder="FIRSTNAME" required></p>

            <p><input class="newp" type="text" name="mname" size="20" placeholder="MIDDLENAME" required></p>

            <p> <input class="newp" type="text" name="lname" size="20" placeholder="LASTNAME" required>
            </p>


            <p> <input class="newp" type="email" name="email" size="20" placeholder="EMAIL" required></p>

            <p><input class="newp" type="password" name="password" size="20" placeholder="PASSWORD" required></p>

            <p><input class="newp" type="text" name="phone" size="20" placeholder="PHONE NUMBER" required></p>

           <div class="dgender">
            <select class="form-select gender" id="validationCustom04" name="gender" required>
                <option selected disabled value="">SELECT GENDER</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
           </div>

           

           <div class="dstate">
            <select class="form-select state" id="validationCustom04" name="state" required>
                <option selected disabled value="">STATE OF ORIGIN</option>
                <option value="ABIA">ABIA</option>
                <option value="ADAMAWA">ADAMAWA</option>
                <option value="AKWA-IBOM">AKWA-IBOM</option>
                <option value="ANAMBRA">ANAMBRA</option>
                <option value="BAUCHI">BAUCHI</option>
                <option value="BAYELSA">BAYELSA</option>
                <option value="BENUE">BENUE</option>
                <option value="BORNO">BORNO</option>
                <option value="CROSS-RIVER">CROSS-RIVER</option>
                <option value="DELTA">DELTA</option>
                <option value="EBONYI">EBONYI</option>
                <option value="EDO">EDO</option>
                <option value="ENUGU">ENUGU</option>
                <option value="EKITI">EKITI</option>
                <option value="GOMBE">GOMBE</option>
                <option value="IMO">IMO</option>
                <option value="JIGAWA">JIGAWA</option>
                <option value="KADUNA">KADUNA</option>
                <option value="KANO">KANO</option>
                <option value="KATSINA">KATSINA</option>
                <option value="KEBBI">KEBBI</option>
                <option value="KOGI">KOGI</option>
                <option value="KWARA">KWARA</option>
                <option value="LAGOS">LAGOS</option>
                <option value="NASAWARA">NASARAWA</option>
                <option value="NIGER">NIGER</option>
                <option value="OGUN">OGUN</option>
                <option value="ONDO">ONDO</option>
                <option value="OYO">OYO</option>
                <option value="OSUN">OSUN</option>
                <option value="PLATEAU">PLATEAU</option>
                <option value="RIVERS">RIVERS</option>
                <option value="SOKOTO">SOKOTO</option>
                <option value="TARABA">TARABA</option>
                <option value="YOBE">YOBE</option>
                <option value="ZAMFARA">ZAMFARA</option>
            </select>
            </div>

            <input class=" btn submit" type="submit" name="submit" value="SIGN UP">

        </form>
    </div>

    <!-- <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>