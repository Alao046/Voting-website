<?php
session_start();
include('logout.php');


$username = $_SESSION["userName"];
$fname = $_SESSION["firstName"];
$mname = $_SESSION["middleName"];
$lname = $_SESSION["lastName"];
$email = $_SESSION["Email"];
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
$email = $rd['email'];
$phone = $rd['phone'];
$gender = $rd['gender'];
$state = $rd['state'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" href="profile.css">
    <!-- <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body >

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
    
<div class="div2" >

<h3>PROFILE</h3>
<form action="" method="POST" class="formclass">


<p > USERNAME:<input class="newp1 cc" type="text" name="username" size="20"  value="<?php echo $username; ?>" readonly>
</p> 
    <p>FIRST NAME: <input class="newp1 cc"  type="text" name="fname" size="20"  value="<?php echo $fname; ?>" readonly></p>  
    
      <p > MIDDLE NAME:<input class="newp1 cc" type="text" name="mname" size="20"  value="<?php echo $mname; ?>" readonly ></p> 
  
       <p >LAST NAME:<input class="newp1 cc" type="text" name="lname" size="20"  value="<?php echo $lname; ?>" readonly>
       </p>  
    
    
    <p >EMAIL ADRESS:<input class="newp1 cc" type="email" name="email" size="20"  value="<?php echo $email; ?>" readonly></p> 
  
      
    
     <!-- <p >PASSWORD:<input class="newp1 cc" type="text" name="password" size="20" value="<?php echo $password; ?>" readonly>
     </p>    -->

 <p >PHONE NUMBER:<input class="newp1 cc" type="text" name="phone" size="20"  value="<?php echo $phone; ?>" readonly></p>   
        
 <p >GENDER:<input class="newp1 cc"  type="text" name="gender" size="20"  value="<?php echo $gender; ?>" readonly></p>
 <p >STATE OF ORIGIN:<input class="newp1 cc"  type="text" name="state" size="20"  value="<?php echo $state; ?>" readonly></p>
 
 <p class="vv"><a class="edit" href="edit.php" >EDIT PROFILE</a></p>


</form>
</div>
<br><br><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
