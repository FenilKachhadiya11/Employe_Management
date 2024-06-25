<?php
require 'vendorfile/autoload.php';

$mongo =new MongoDB\client;
$db=$mongo->newdb;
$collection=$db->newcollection;

if($_POST)
{
$insert=array(
    'ename'=>$_POST['ename'],
    'mobile'=>$_POST['mobile'],
    'gender'=>$_POST['gender'],
    'email'=>$_POST['email'],
    'department'=>$_POST['department'],
    'address'=>$_POST['address']
);
}
if($collection->insertOne($insert))
{
    echo "Data is Inserted Successfully";
}
else{
    echo "Some issue in Inserting data";
}
?>