<?php
require 'vendorfile/autoload.php'; //file inmort 

if($_POST)
 {
    $mongo=new MongoDB\Client;
    $db=$mongo->newdb; //import
    $id=new MongoDB\BSON\ObjectID($_POST['id']);
    $db->newcollection->updateOne(array('_id'=>$id),
    array(
        '$set'=>array(  
            'ename'=>$_POST['ename'],
            'mobile'=>$_POST['mobile'],
            'gender'=>$_POST['gender'],
            'email'=>$_POST['email'],
            'department'=>$_POST['department'],
            'address'=>$_POST['address']
        ))
    );
header('location:showdata.php');
    }
?>