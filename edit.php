<?php
session_start();
include('logout.php');

$username = $_SESSION["userName"];
$fname = $_SESSION["firstName"];
$mname = $_SESSION["middleName"];
$lname = $_SESSION["lastName"];
// $email = $_SESSION["Email"];
// $password = $_SESSION["Password"];
$phone = $_SESSION["Phone"];
$gender = $_SESSION["Gender"];
$state = $_SESSION["State"];


require_once('connection.php');
$str = "select * from userstb where username='$username' ";
$cmd = mysqli_query($mycon, $str);
$nr = mysqli_num_rows($cmd);
if($nr > 0) {
$rd = mysqli_fetch_array($cmd);
$username = $rd['username'];
$fname = $rd['firstname'];
$mname = $rd['middlename'];
$lname = $rd['lastname'];
// $email = $rd['email'];
$phone = $rd['phone'];
$gender = $rd['gender'];
$state = $rd['state'];
}


require_once('connection.php');
if(isset($_POST['update'])) {;
$fname = $_REQUEST['fname'];
$mname = $_REQUEST['mname'];
$lname = $_REQUEST['lname'];
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];
$state = $_REQUEST['state'];
$str = "update userstb set firstname = '$fname', middlename='$mname', lastname='$lname', phone='$phone', gender='$gender',  state='$state'  where username = '$username' ";
$cmd = mysqli_query($mycon, $str) or die('Cannot Update Data!');
echo "<script language='javascript'>window.open('profile.php', '_parent')</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PAGE</title>
    <link rel="stylesheet" href="edit.css">
    <!-- <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="lhome.php" style="color: white">
          <img
            src="logo.jpg"
            alt="Image Logo"
            class="img-fluid"
            style="height: 40px; width: 60px"
          />
          INEC
        </a>
        <button
          class="navbar-toggler t1"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon i1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item l1">
              <a class="nav-link active a1" aria-current="page" href="lhome.php"
                >HOME</a
              >
            </li>
            <li class="nav-item l2">
              <a class="nav-link a2" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item l3">
              <a class="nav-link a3" href="#">ABOUT US</a>
            </li>
            <li class="nav-item l4">
            <form method="POST">
            <button type="submit" name="logout" class="lout">LOG OUT</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="bigdiv">
        <h3 class="reg">UPDATE PROFILE</h3>
        <form action="" method="POST" class="formclass">

            <!-- <p><input class="se newp" type="text" name="username" size="20" placeholder="USERNAME (not editable)" value="<?php echo $username; ?>" readonly></p> -->

            <p class="ggh">FIRST NAME :<input class="newp" type="text" name="fname" size="20" placeholder="" value="<?php echo $fname; ?>"></p>

            <p class="ggh">MIDDLENAME :<input class="newp" type="text" name="mname" size="20" placeholder="" value="<?php echo $mname; ?>"></p>

            <p class="ggh">LASTNAME :<input class="newp" type="text" name="lname" size="20" placeholder="" value="<?php echo $lname; ?>">
            </p>


            <!-- <p> <input class=" se newp" type="email" name="email" size="20" placeholder="EMAIL (not editable)" readonly></p> -->

            <!-- <p><input class="newp" type="password" name="password" size="20" placeholder="PASSWORD" value="<?php echo $password; ?>"></p> -->

            <p class="ggh">PHONE :<input class="newp" type="text" name="phone" size="20" placeholder="" value="<?php echo $phone; ?>"></p>
           
           <div class="dgender"> GENDER :
            <select class="form-select gender" id="validationCustom04" name="gender" required>
                <option selected disabled value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
           
           </div>


            <div class="dstate"> STATE :
             <select class="form-select state" id="validationCustom04" name="state" required>
                <option selected disabled value="<?php echo $state; ?>"><?php echo $state; ?></option>
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

 <input class=" btn update" type="submit" name="update" value="UPDATE PROFILE"> 

        </form>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>