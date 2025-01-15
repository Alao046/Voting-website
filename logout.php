<?php
// session_start();
if($_SESSION['userName']==""){
    echo "<script language='javascript'>window.open('fhome.php', '_parent')</script>";
}

if (isset($_REQUEST['logout'])){
   
    session_destroy();
    
    header('Location:fhome.php');
 
}

?>