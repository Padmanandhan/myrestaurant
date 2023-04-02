<?php
    $email = $_GET['email'];
    $query = "select * from register where email='$email'";
    $con=@mysqli_connect('localhost', 'root', '','myownwebsite') or die ('Server Not Available');
    @mysqli_select_db($con ,'myownwebsite') or die ('Database Not Available');
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
    </head>
    <body>
        <form action="updateview.php" method="get">
            <table width="50%" cellpadding="10">
                <tbody>
                    <tr>
                        <td>fname: </td>
                        <td><input type="text" readonly="readonly" name="fname" value="<?php echo $row['fname'];?>" />*</td>
                    </tr>
                    <tr>
                        <td>lname: </td>
                        <td><input type="text" name="lname" id="quantity" value="<?php echo $row['lname'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>email: </td>
                        <td><input type="email" name="email" id="address" value="<?php echo $row['email'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>pswrd: </td>
                        <td><input type="password" name="pswrd" id="contact" value="<?php echo $row['pswrd'];?>" />*</td>
                
                    </tr>
                    
                    
                    
                        <td align="center" colspan="2">
                            <input type="submit"  value="Update view" />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" onclick="history.go(-1);"  value="Cancel" />
                        </td>
                    </tr>                    
                </tbody>
            </table>
        </form>
    </body>
</html>