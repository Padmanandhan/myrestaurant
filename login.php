<?php

$email = $_POST['email'];
$pswrd = $_POST['pswrd'];

$con = @mysqli_connect('localhost','root','','myownwebsite');
$query = "SELECT email, pswrd FROM register";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
$flag=0;

while ($row = mysqli_fetch_assoc($result)){
    if($row['email']== $email && $row['pswrd']== $pswrd){
        $flag=1;
    }
}
    if($flag)
        echo "user exist";
    else 
        echo "user not exist";
