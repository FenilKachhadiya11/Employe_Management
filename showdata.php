<?php
require 'vendorfile/autoload.php';
$mongo =new MongoDB\Client;
$db=$mongo->newdb;
$mobj=$db->newcollection->find();
?>
<html>
    <head>
        <title>Show</title>
    <link rel="stylesheet" href="show.css">
    </head>

    <body>
        <div class="center">
            
            <div class="mh">
                <h1>Employee Management system</h1><br>
            </div>
            <div class="sh">
                <h2>Database</h2>
            </div>
            
            <table border="5px">
                <tr>
                    <td>Ename</td>
                    <td>Mobile</td>
                    <td>Gender</td>
                    <td>Email</td>
                    <td>Department</td>
                    <td>Address</td>
                    <td>Update Action</td>
                    <td>Delete Action</td>
                </tr>
        </div>

    <?php
foreach($mobj as $row){
    ?>
        <tr>
            <td><?php echo $row['ename']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['address']?></td>
            <td class="btn update-btn"><a href="updatedata.php?id=<?php echo $row['_id'];?>">Update</a></td>
            <td class="btn delete-btn"><a href="deletedata.php?id=<?php echo $row['_id'];?>">Delete</a></td>
        </tr>
    <?php
}
?>
        </table>
        
        <div class="cb">
                <p>
                    Created By
                </p>    
        </div>

        
        <div class="u1">
                <p>
                     <!-- user 1 name -->
                </p>    
        </div>

        
        <div class="u2">
                <p>
                    <!-- uesr 2  name -->
                </p>    
        </div>

            
    </body>
    
</html>
