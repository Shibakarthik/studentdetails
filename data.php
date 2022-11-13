<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Details</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >

        <?php
        $con=  mysqli_connect("localhost", "root", "", "studentdetails");
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from studentdetails");
       ?>
        <div>
         <center><b>STUDENT DETAILS</b></center>
         <table border="1">
            <th>Reg.no</th>
                <th>Name</th>
                <th>class</th>
                <th>D.O.B</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Blood Group</th>

            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                    <td><?php echo $row['Reg.no']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Class']; ?></td>
                    <td><?php echo $row['D.O.B']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Phone Number']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Blood Group']; ?></td>

            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>