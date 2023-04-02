<?php
$con = @mysqli_connect('localhost', 'root', '' ,'myownwebsite') or die ('Server Not Available');
@mysqli_select_db($con ,'myownwebsite') or die ('Database Not Available');
$query = "select * from register"; // * it is used to select all fields in table.
$result = mysqli_query($con ,$query);
$count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>view Detail</title>
        <style>
            table,tr,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Total Client : <?php echo $count; ?></h1>
        <hr>
        <table border="0" width="100%" cellpadding="10">
            <thead>
                <tr>
                    <th>fname</th>
                    <th>lname</th>
                    <th>email</th>
                    <th>pswrd</th>          
                    <th>Edit/Delete</th>
                    
                </tr>
            </thead>
            <tbody>        
                <?php
                //$row = mysql_fetch_assoc($result);
                //$row = mysql_fetch_array($result);        

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>                   
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['pswrd']; ?></td>
                        <td>
                            <a href="edit.php?email=<?php echo $row['email']; ?>">Edit</a>
                            &nbsp;&nbsp;&nbsp;
                            <a onclick="return confirm('Are You Sure');" href="delete.php?email=<?php echo $row['email']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <a href="index.html">HOME</a></li>
    </body>
</html>
