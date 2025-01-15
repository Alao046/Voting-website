<?php
session_start();

// require_once('connection.php');



// $username = $_SESSION["userName"];
// $activation = $_SESSION["Activation"];

// if(isset($_POST["back"])){

// header("Refresh:0: url=lhome.php");
//     // $str = "select activation from userstb where username='$username' ";
//     // $cmd = mysqli_query($mycon, $str);
//     // $nr = mysqli_num_rows($cmd);
//     // if($nr > 0) {
//     //  $rd = mysqli_fetch_array($cmd);
//     //  if ($activation=='ACTIVATED') {   
//     //     echo "hello";  
//     //  }
//     // }
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE CONFIRMATION</title>
    <link rel="stylesheet" href="vlogin.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
</head>

<body >

    <div class="bigdiv">
        <h3 class="login">YOU HAVE VOTED SUCCESSFULY</h3>
    
        <span class="ss">GO BACK TO HOME PAGE <a href="lhome.php">
            <form action="" method="post">
            <input class=" btn tregister" id="back" type="button" name="back" value="CLICK HERE"></form></a></span>
    </div>

    <!-- <script src="home.js"></script> -->
    <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>