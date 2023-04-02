<?php   
    $email = $_GET['email'];
    $query = "delete from register where email='$email'";
    $con=@mysqli_connect('localhost', 'root', '' ,'myownwebsite') or die ('Server Not Available');
  @mysqli_select_db($con,'myownwebsite') or die ('Database Not Available');
    mysqli_query($con,$query);
   header("Location: edit_deleteview.php");
?>