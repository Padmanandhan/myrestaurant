<?php

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$pswrd = $_REQUEST['pswrd'];

 $query = "update register set fname='$fname',lname='$lname' ,email='$email',pswrd='$pswrd' WHERE pswrd=trim('$pswrd')";
    $con =@mysqli_connect('localhost', 'root', '') or die ('Server Not Available');
    @mysqli_select_db( $con ,'myownwebsite') or die ('Database Not Available');
    
    mysqli_query( $con,$query);
    header("Location: edit_deleteview.php"); // HEADER FUNCTION header();
?>

