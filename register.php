<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pswrd = $_POST['pswrd'];

$con = @mysqli_connect('localhost','root','','myownwebsite');
$query = "insert into register values ('$fname', '$lname' , '$email' , '$pswrd')";
$result = mysqli_query($con, $query);//---why use this one doubt

// this is header function -->header()
// this is used to link(redirect) in another page.

?>

<html>
<body bgcolor="orange" text="black">
    <br><br>
    <center><sub><h1>You are register successfully</h1></sub></center><br>
    <br><br><br><br>
<?php
if($result==1){
    ?>
    <center>
        
  
   <sub> <h2>Your user id is :</h2></sub><?php echo $email; ?>

   <sub> <h2>Your password is :</h2></sub><?php echo $pswrd; ?>

</center>
<?php 
}
?>
    
</body>
</html>


