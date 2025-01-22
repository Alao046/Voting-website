<?php
session_start();
include('logout.php');
require_once('connection.php');


$username = $_SESSION["userName"];
$activation = $_SESSION["Activation"];



$id = 1;
$str4 = "select * from countertb where id='$id' ";
$cmd4 = mysqli_query($mycon, $str4);
$nr4 = mysqli_num_rows($cmd4);
if($nr4 > 0) {
$rd4 = mysqli_fetch_array($cmd4);
$count1 = $rd4['tinubucount'];
$count2 = $rd4['atikucount'];
$count3 = $rd4['obicount'];

}



if(isset($_POST["vote1"])){
  $voted1 = TRUE;
  $str = "select activation from userstb where username='$username' ";
  $cmd = mysqli_query($mycon, $str);
  $nr = mysqli_num_rows($cmd);
  if($nr > 0) {
   $rd = mysqli_fetch_array($cmd);
   if ($activation=='ACTIVATED') {
    $message = $username . ', you have already voted';
  require_once('message.php');
  $voted1 = FALSE;
   }
   else  {
    $candidate = 'TINUBU';
    $activation1 = 'ACTIVATED';
    $str11 = "update userstb set candidate= '$candidate', activation='$activation1'  where username = '$username' ";
    $cmd11 = mysqli_query($mycon, $str11) or die('Cannot Update Data!');
   echo "<script language='javascript'>window.open('empty.php', '_parent')</script>";
   $voted1 = TRUE;
       
   }
}
if($voted1 === TRUE){
  $id = 1;
$str111 = "select * from countertb where id='$id' ";
$cmd111 = mysqli_query($mycon, $str111);
$nr111 = mysqli_num_rows($cmd111);
if($nr111 > 0) {
$rd111 = mysqli_fetch_array($cmd111);
$tinubucount = $rd111['tinubucount'];
}

$vote1 = $tinubucount + 1;

$str1111 = "update countertb set tinubucount = '$vote1' where tinubucount = '$tinubucount' ";
$cmd1111 = mysqli_query($mycon, $str1111) or die('Cannot Update Data!');
}

  }



  if(isset($_POST["vote2"])){
    $voted2 = TRUE;
    $str2 = "select activation from userstb where username='$username' ";
    $cmd2 = mysqli_query($mycon, $str2);
    $nr2= mysqli_num_rows($cmd2);
    if($nr2 > 0) {
     $rd2 = mysqli_fetch_array($cmd2);
     if ($activation=='ACTIVATED') {
      $message = $username . ', you have already voted';
    require_once('message.php');
    $voted2 = FALSE;
     }
     else  {
      $candidate = 'ATIKU';
      $activation = 'ACTIVATED';
      $str22 = "update userstb set candidate= '$candidate', activation='$activation'  where username = '$username' ";
      $cmd22 = mysqli_query($mycon, $str22) or die('Cannot Update Data!');
      echo "<script language='javascript'>window.open('empty.php', '_parent')</script>";
      $voted2 = TRUE;
         
     }
  }
  if($voted2 === TRUE){
  $id = 1;
  $str222 = "select * from countertb where id='$id' ";
  $cmd222 = mysqli_query($mycon, $str222);
  $nr222 = mysqli_num_rows($cmd222);
  if($nr222 > 0) {
  $rd222 = mysqli_fetch_array($cmd222);
  $atikucount = $rd222['atikucount'];
  }
  
  $vote2 = $atikucount + 1;
  
  $str2222 = "update countertb set atikucount = '$vote2' where atikucount = '$atikucount' ";
  $cmd2222 = mysqli_query($mycon, $str2222) or die('Cannot Update Data!');
}
    }  



    if(isset($_POST["vote3"])){
      $voted3 = TRUE;
      $str3 = "select activation from userstb where username='$username' ";
      $cmd3 = mysqli_query($mycon, $str3);
      $nr3 = mysqli_num_rows($cmd3);
      if($nr3 > 0) {
       $rd3 = mysqli_fetch_array($cmd3);
       if ($activation=='ACTIVATED') {
        $message = $username . ', you have already voted';
      require_once('message.php');
      $voted3 = FALSE;
       }
       else  {
        $candidate = 'OBI';
        $activation = 'ACTIVATED';
        $str33 = "update userstb set candidate= '$candidate', activation='$activation'  where username = '$username' ";
        $cmd33 = mysqli_query($mycon, $str33) or die('Cannot Update Data!');
        echo "<script language='javascript'>window.open('empty.php', '_parent')</script>";
        $voted3 = TRUE;
           
       }
    }
    if($voted3 === TRUE){
    $id = 1;
$str333 = "select * from countertb where id='$id' ";
$cmd333 = mysqli_query($mycon, $str333);
$nr333 = mysqli_num_rows($cmd333);
if($nr333 > 0) {
$rd333 = mysqli_fetch_array($cmd333);
$obicount = $rd333['obicount'];
}

$vote3 = $obicount + 1;

$str3333 = "update countertb set obicount = '$vote3' where obicount = '$obicount' ";
$cmd3333 = mysqli_query($mycon, $str3333) or die('Cannot Update Data!');
    }
      }


    


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INEC</title>
    <!-- <link
      rel="stylesheet"
      href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="home.css" />
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

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>THE NIGERIAN PRESIDENTIAL ELECTION</h1>
          <p class="ATA">PROCEED TO VOTE BELOW</p>
        </div>
        <div class="col-sm-6">
          <div
            id="carouselExampleControls"
            class="carousel slide car"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active ssdd">
                <img src="V1.jpg" class="d-block w-100" alt="An Image" />
              </div>
              <div class="carousel-item">
                <img src="V2.jpg" class="d-block w-100" alt="An Image" />
              </div>
              <div class="carousel-item">
                <img src="V3.jpg" class="d-block w-100" alt="An Image" />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row prodiv">
        <div class="col-lg-4 mb-4">
          <div class="card cance">
            <img
              src="tinubu.jpg"
              class="card-img-top img-fluid ime"
              alt="An Image"
            />
            <div class="card-body text-center sss">
              
              <h5 class="card-title ww" name="tinubu">BOLA AHMED TINUBU</h5>
              <form method="POST">
              <input id="tvote" class="vote" type="submit" name="vote1" value="VOTE" />
              </form>
              <p class="vc">
                VOTE COUNT:
                          
                <span id="tcount" class="count" name="count1"><?php echo $count1; ?></span>
                
               
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card cance">
            <img
              src="atiku.jpg"
              class="card-img-top img-fluid ime"
              alt="An Image"
            />
            <div class="card-body text-center sss">
              <h5 class="card-title ww" name="atiku">ATIKU ABUBAKAR</h5>
              <form method="POST">
              <input id="avote" class="vote" type="submit" name="vote2" value="VOTE" />
              </form>
              
              <p class="vc">
                VOTE COUNT:
                <span id="acount" class="count" name="count2"><?php echo $count2; ?></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card cance">
            <img
              src="obi.jpg"
              class="card-img-top img-fluid ime"
              alt="An Image"
            />
            <div class="card-body text-center sss">
              <h5 class="card-title ww" name="peter">PETER GRINGORY OBI</h5>
              <form method="POST">
              <input id="pvote" class="vote" type="submit" name="vote3" value="VOTE" />
              </form>
              
              <p class="vc">
                VOTE COUNT:
                <span id="pcount" class="count" name="count3"><?php echo $count3; ?></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" 
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src="home.js"></script>  -->
    <!-- <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
