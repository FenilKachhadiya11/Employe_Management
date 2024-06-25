<?php
require 'vendor/autoload.php';
$id=$_GET['id'];
$mongo=new MongoDB\client;
$db=$mongo->newdb;
$id=new MongoDB\BSON\ObjectID($id);
$db=$db->newcollection->deleteOne(array('_id'=>$id));
header('location:show.php');
?>