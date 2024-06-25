<?php
require 'vendorfile/autoload.php';
$id=$_GET['id'];
$mongo=new MongoDB\Client;
$db=$mongo->newdb;
$id=new MongoDB\BSON\ObjectID($id);
$moj=$db->newcollection->findOne(array('_id'=>$id));
?>
<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" href="update.css">
    </head>
    <body>
    <div class="container">
        <h1>Update Data</h1>
        <form action="updatedata1.php" method="post">
            <div class="form-group">
                <label for="ename">Ename:</label>
                <input type="text" id="ename" name="ename" value="<?php echo $moj['ename']?>" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="mobile" value="<?php echo $moj['mobile']?>" required pattern="[0-9]{10}">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" value="<?php echo $moj['gender']?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $moj['email']?>" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" value="<?php echo $moj['department']?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $moj['address']?>" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $moj['_id']?>">
            <button type="submit" name="button" value="submit">Update</button>
        </form>
    </div>
</body>
</html>